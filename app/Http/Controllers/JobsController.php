<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Currencies;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JobsController extends Controller
{
    //
    public function seeker()
    {
        return view('jobs.seeker.index');
    }

    public function giver()
    {
        $tags = [];
        $companies = [];
        $jobs = Jobs::where(['user_id' => Auth::id()])->get();
        for($i = 0; $i < sizeof($jobs); $i++){
            $companies[] = Jobs::find(1)->company;
        }

        foreach ($jobs as $job){
            $tags_split = explode(",", $job->tags);
            $tags[] = $tags_split;
        }

        return view('jobs.giver.index', ['jobs' => Jobs::where(['user_id' => Auth::id()])->get(), 'tags' => $tags, 'companies' => $companies]);
    }

    public function create(Request $request, User $user)
    {
        $fields_validate = Validator::make($request->all(), [
            'job_title' => ['required'],
            'company' => ['required'],
            'tags' => ['required'],
            'location' => ['required'],
            'description' => ['required'],
            'experience' => ['required'],
            'degree_req' => ['required'],
            'job_type' => ['required'],
            'salary' => ['required'],
            'rate' => ['required'],
            'currency' => ['required']
        ]);

        if($fields_validate->fails()){
            $error_message = 'There are a bunch of errors!';
            $errCount = $fields_validate->errors()->count();
            if($errCount <= 1)
                return response(['message' => $fields_validate->errors()->all(), 'type' => 'error'], 422);
            else
                return response(['message' => $error_message, 'type' => 'error'], 422);
        } else
            $fields = $fields_validate->validated();

        $fields['currency'] = Currencies::where(['currency_name' => $fields['currency']])->get()->first()->id;
        $fields['company'] = Company::where(['company_name' => $fields['company']])->get()->first()->id;

        try{
            Jobs::create([
                'user_id' => $user->id,
                'title' => $fields['job_title'],
                'company_id' => $fields['company'],
                'tags' => $fields['tags'],
                'location' => $fields['location'],
                'description' => $fields['description'],
                'experience' => $fields['experience'],
                'salary' => $fields['salary'],
                'rate' => $fields['rate'],
                'job_type' => $fields['job_type'],
                'degree_req' => $fields['degree_req'],
                'currency' => $fields['currency']
            ]);

            return response(['message' => 'Job created successfully!', 'type' => 'success'], 200);

        }catch (\Exception $e){
            return response(['message' => $e->getMessage(), 'type' => 'error'], 500);
        }
    }

    public function show_create(User $user)
    {
        return view('jobs.giver.create', ['company' => Company::where(['user_id' => $user->id])->get(), 'currency' => Currencies::all()]);
    }

    public function job_applicants(Request $request, User $user, Jobs $job)
    {
//        dd($job);
//        return view('jobs.giver.applicants', ['job_data' => $job]);
    }

}

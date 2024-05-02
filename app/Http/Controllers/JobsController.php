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
        return view('jobs.giver.index');
    }

    public function create(Request $request, User $user)
    {
        $fields_validate = Validator::make($request->all(), [
            'job_title' => ['required'],
            'company' => ['required'],
            'tags' => ['required'],
            'date_of_post' => ['required|date'],
            'location' => ['required'],
            'description' => ['required'],
            'degree_req' => ['required'],
            'experience' => ['required'],
            'salary' => ['required'],
            'rate' => ['required'],
            'job_type' => ['required'],
            'needed_skills' => ['required'],
            'currency' => ['required'],
        ]);

        if($fields_validate->fails()){
            $error_message = 'A field is not filled';
            return response(['message' => $error_message, 'type' => 'error'], 422);
        } else
            $fields = $fields_validate->validated();

        $fields['currency'] = Currencies::where(['currency_name' => $fields['currency']])->get()->first()->currency_name;

        try{
            User::create([
                'user_id' => Auth::id(),
                'job_title' => $fields['job_title'],
                'company' => $fields['company'],
                'tags' => $fields['tags'],
                'date_of_post' => $fields['date_of_post'],
                'location' => $fields['location'],
                'description' => $fields['description'],
                'degree_req' => $fields['degree_req'],
                'experience' => $fields['experience'],
                'salary' => $fields['salary'],
                'rate' => $fields['rate'],
                'job_type' => $fields['job_type'],
                'needed_skills' => $fields['needed_skills'],
                'currency' => $fields['currency']
            ]);

            return response(['message' => 'Job created successfully!', 'type' => 'success'], 200);

        }catch (\Exception $e){
            return response(['message' => 'An error Occurred', 'type' => 'error'], 500);
        }
    }

    public function show_create(User $user)
    {
        return view('jobs.giver.create', ['company' => Company::where(['user_id' => Auth::id()])->get(), 'currency' => Currencies::all()]);
    }

    public function job_applicants(Request $request, User $user, Jobs $job)
    {
//        dd($job);
//        return view('jobs.giver.applicants', ['job_data' => $job]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\Applications;
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
        $jobs = Jobs::onlyTrashed()->where(['user_id' => Auth::id()])->get();
        if($jobs->isEmpty())
            $trashed = false;
        else{
            $trashed = true;
        }
        return view('jobs.giver.index', ['jobs' => Jobs::where(['user_id' => Auth::id()])->paginate(10), 'trashed' => $trashed]);
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

            return response(['message' => 'Job created successfully!', 'type' => 'success', 'redirect' => 'jobs/giver'], 200);

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
        return view('jobs.giver.applicants', [
            'job' => $job,
            'applicants' => Applicants::where(['job_id' => $job->id])->get()
        ]);
    }

    public function delete_job(Request $request, User $user, Jobs $job)
    {
        try{
            $job->delete();
            return response(['type' => 'success', 'message' => 'Job Listing has been deleted!', 'redirect' => 'reload'], 200);
        } catch (\Exception $e){
            return response(['type' => 'error', 'message' => 'An error occurred!!'], 500);
        }
    }

    public function show_edit(User $user, Jobs $job)
    {
        return view('jobs.giver.edit', ['job' => $job, 'currency' => Currencies::all()]);
    }

    public function edit_job(Request $request, User $user, Jobs $job)
    {
        $fields = $request->all();

        try{
            $fields['currency'] = Currencies::where(['currency_name' => $fields['currency']])->get()->first()->id;
            $fields['company'] = Company::where(['company_name' => $fields['company']])->get()->first()->id;

            Jobs::where(['id' => $job->id])->update([
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

            return response(['message' => 'Job updated successfully!', 'type' => 'success', 'redirect' => '/jobs/giver'], 200);
        } catch (\Exception $e){
            return response(['type' => 'error', 'message' => 'An error occurred!!', 'error' => $e->getMessage()], 500);
        }
    }

    public function show_application(Request $request, Jobs $job, Applicants $applicant)
    {
        return view('jobs.giver.view-applicant');
    }
}

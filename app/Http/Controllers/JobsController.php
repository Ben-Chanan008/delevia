<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

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

    public function fetch_job(Request $request)
    {
        $values = $request->validate([
            'job_id' => 'required'
        ]);

        $job = Jobs::where(['id', $values['job_id']])->get()->first();

        return $job;
    }

    public function job_applicants(Request $request, Jobs $job)
    {
        dd($job);
//        return view('jobs.giver.applicants', ['job_data' => $job]);
    }

}

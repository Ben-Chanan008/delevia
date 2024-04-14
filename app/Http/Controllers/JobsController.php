<?php

namespace App\Http\Controllers;

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
        return view('jobs.seeker.index');
    }

}

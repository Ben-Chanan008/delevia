<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'email' => [Rule::unique('users', 'email'), 'email', 'required'],
            'password' => 'required'
        ]);

        if(User::create($fields))
            return response(['message' => 'User has been created successfully!! Please wait', 'type' => 'success', 'redirect' => '/'], 200);
        else
            return response(['message' => 'An Error Occurred!! Please wait', 'type' => 'error'], 442);
    }
}

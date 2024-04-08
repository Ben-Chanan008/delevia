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

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['email', 'required'],
            'password' => 'required|max:8'
        ]);



    }
    public function login_check(Request $request)
    {
        $email = $request->all()['email'];

        $user_found = User::where(['email' => $email])->first();

        if($user_found === null)
            return response(['checked' => false], 442);
        else
            return response(['checked' => true], 200);
    }
}

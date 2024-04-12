<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    private static string $alpha_num_chars = 'QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbm';
    private static array $role_ids = [
        'job-giver' => 2,
        'job-seeker' => 3
    ];

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'email' => [Rule::unique('users', 'email'), 'email', 'required'],
            'password' => 'required',
            'user_type' => 'required'
        ]);

        if(User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ])){
            $user = User::where(['email' => $fields['email']])->get()->first();

            if(RoleUser::create([
                'roles_id' => strtolower($fields['user_type']) === 'hirer' ? self::$role_ids['job-giver'] : self::$role_ids['job-seeker'],
                'user_id' => $user->id
            ])){
                Auth::login($user);
                return response(['message' => 'User has been created successfully!! Please wait', 'type' => 'success', 'redirect' => '/'], 200);
            } else
                return response(['message' => 'An Error Occurred!! Please wait', 'type' => 'error'], 422);
        } else
            return response(['message' => 'An Error Occurred!! Please wait', 'type' => 'error'], 422);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['email', 'required'],
            'password' => 'required|min:8'
        ]);

        $attempt_user = User::where(['email' => $fields['email']])->get()->first();

        if(!$attempt_user)
            return response(['message' => 'User does not exists', 'type' => 'error'], 422);
        else{
            if(Hash::check($fields['password'], $attempt_user->password)){
                Auth::login($attempt_user);

                if($attempt_user->user_key)
                    $route = '/jobs/giver';
                else
                    $route = '/jobs/seeker';

                return response(['message' => 'Sign In successful!! Please Wait', 'redirect' => $route, 'type' => 'success'], 200);
            } else{
                if(!Hash::check($fields['password'], $attempt_user->password))
                    return response(['message' => 'Sign In failed!! Incorrect Credentials'], 422);
            }
        }
    }

    public function rand_keys(){
        $unique_key = str_shuffle($this::$alpha_num_chars);
        while (User::where(['user_key' =>  $unique_key])->count() > 0)
            $unique_key = str_shuffle($this::$alpha_num_chars);

        return $unique_key;
    }

    public function permissions()
    {
        return view('modules');
    }
}

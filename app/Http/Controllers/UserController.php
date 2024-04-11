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
        'job-giver' => 3,
        'job-seeker' => 2
    ];

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'email' => [Rule::unique('users', 'email'), 'email', 'required'],
            'password' => 'required',
            'user_type' => 'required'
        ]);

        if(strtolower($fields['user_type']) === 'hirer')
            $fields['user_key'] = $this->rand_keys();

        if(User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'user_key' => $fields['user_key'],
        ])){
            $user = User::where(['email' => $fields['email']])->get()->first();
            $user_key = User::where(['email' => $fields['email']])->get(['user_key'])->first();

            if(RoleUser::create([
                'role_id' => $user_key ? self::$role_ids['job-giver'] : self::$role_ids['job-seeker'],
                'user_id' => $user->id,
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
            'password' => 'required|max:8'
        ]);

        $attempt_user = User::where(['email' => $fields['email']])->get()->first();

        if($attempt_user && Hash::check($fields['password'], $attempt_user->password)){
            Auth::login($attempt_user);
            return response(['Sign In successful!! Please Wait'], 200);
        } else{
            if(!Hash::check($fields['password'], $attempt_user->password))
                return response(['message' => 'Sign In failed!! Incorrect Credentials', 'redirect' => '/view-jobs'], 422);
            if(!$attempt_user)
                return response(['message' => 'User does not exists'], 422);
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

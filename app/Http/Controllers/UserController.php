<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        $fields_validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [Rule::unique('users', 'email'), 'email', 'required'],
            'password' => 'required',
            'user_type' => 'required'
        ]);

        if($fields_validation->fails()){
            $error_messages = $fields_validation->errors();
            $email_error_msg = $error_messages->first('email');

            return response(['message' => $email_error_msg, 'type' => 'error'], 422);
        } else
            $fields = $fields_validation->validated();

        if(strtolower($fields['user_type']) === 'hirer')
            $fields['user_key'] = $this::rand_keys();
        else
            $fields['user_key'] = null;

        try{
            if(User::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => bcrypt($fields['password']),
                'user_key' => $fields['user_key']
            ])){
                $user = User::where(['email' => $fields['email']])->get()->first();

                if(RoleUser::create([
                    'roles_id' => strtolower($fields['user_type']) === 'hirer' ? self::$role_ids['job-giver'] : self::$role_ids['job-seeker'],
                    'user_id' => $user->id
                ])){
                    Auth::login($user);

                    if($user->user_key)
                        $route = '/jobs/giver';
                    else
                        $route = '/jobs/seeker';

                    return response(['message' => 'User has been created successfully!! Please wait', 'type' => 'success', 'redirect' => $route], 200);
                } else
                    return response(['message' => 'An Error Occurred!! Our Developers are being notified!', 'type' => 'error'], 500);
            } else
                return response(['message' => 'An Error Occurred!! Our Developers are being notified!', 'type' => 'error'], 500);
        } catch (QueryException|\Exception $e){
            return response(['message' => 'An Error Occurred!! Our Developers are being notified!', 'type' => 'error'], 500);
        }
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['email', 'required'],
            'password' => 'required|min:8'
        ]);

        $attempt_user = User::where(['email' => $fields['email']])->get()->first();

        if(!$attempt_user)
            return response(['message' => 'User does not exist', 'type' => 'error'], 422);
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
                    return response(['message' => 'Sign In failed!! Incorrect Credentials', 'type' => 'error'], 422);
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

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forgot_password(Request $request)
    {
        $fields_validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($fields_validation->fails()){
            $error_messages = $fields_validation->errors();
            $email_error_msg = $error_messages->first('email');
            $pass_error_msg = $error_messages->first('password');

            $pass_error_msg = $pass_error_msg === '' ? null : $pass_error_msg;
            $email_error_msg = $email_error_msg === '' ? null : $email_error_msg;

            return response(['type' => 'error', 'message' => $email_error_msg ?? $pass_error_msg], 422);
        } else
            $fields = $fields_validation->validated();

        $fields['password'] = bcrypt($fields['password']);
        $user_attempt = User::where(['email' => $fields['email']])->update(['password' => $fields['password']]);

        if($user_attempt)
            return response(['type' => 'success', 'message' => 'Password has been Updated', 'redirect' => 'user/login'], 200);
        else
            return response(['type' => 'error', 'message' => 'An Error Has Occurred!!'], 500);
    }

    public static function checkUserRole()
    {
        $user = User::where(['id' => Auth::id()])->get()->first();
        $user_role = $user->roles->first()->role;

        return strtolower($user_role) === 'job giver';
    }
}

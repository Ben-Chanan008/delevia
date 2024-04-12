<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::find(Auth::user()->id);
        $user_role = $user->roles;


        switch ($user_role[])
//            dd(strtolower(route('job-seeker')));
            if(strtolower($role->role) === 'job giver')
                return redirect()->route('job-giver');
            else if(strtolower($role->role) === 'job seeker')
                return redirect()->route('job-seeker');
            else if(strtolower($role->role) === 'admin')
                return redirect()->route('admin');
            else
                abort(403, 'Unauthorized request');
        }

        return $next($request);
    }
}

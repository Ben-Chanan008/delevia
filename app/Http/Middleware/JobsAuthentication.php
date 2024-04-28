<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class JobsAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->route()->parameter('user')){
            $user = Auth::id();
            $owner = $request->route()->parameter('user');

            if($user === $owner->id)
//                dd($user);
                return $next($request);
            else
//                dd($owner->id);
                abort(403, 'Unauthorized Access');
        } elseif($request->route()->parameter('job')){
            $user = Auth::user()->id;
            $job_id = $request->route()->parameter('job');

            if($job_id === $user)
                return $next($request);
            else
                abort(403, 'Unauthorized Access');
        } else
            abort(400, 'Bad Request');
    }
}

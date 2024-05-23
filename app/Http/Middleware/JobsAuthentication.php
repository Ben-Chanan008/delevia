<?php

namespace App\Http\Middleware;

use App\Models\Jobs;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class JobsAuthentication
{

    public static array $test = ['message' => 'This is for debugging'];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route('user') && !$request->route('job')) {
            $user = Auth::id();
            $owner = $request->route('user');

            if ($user === $owner->id)
                return $next($request);
            else
                abort(403, 'Unauthorized Access');
        } elseif ($request->route('job') && !$request->route('user')) {
            $user = Auth::id();
            $job = $request->route('job');

            if ($job->user_id === $user)
                return $next($request);
            else
                abort(403, 'Unauthorized Access');
        } elseif($request->route('user') && $request->route('job')){
            $job_owner_id = $request->route('job')->user_id;
            if($job_owner_id === Auth::id())
                return $next($request);
            else
                abort(403, 'Unauthorized Access');
        } else
            abort(400, 'Bad Request');
    }
}
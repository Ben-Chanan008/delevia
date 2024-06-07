<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $logged_in_user = Auth::user();
        $flag = false;
        
        if($logged_in_user->user_key)
            $flag = true;

        if(!$flag)
            abort(403, 'Unuathorized Access');
        else
            return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use App\Models\Jobs;
use App\Models\RolesAccess;
use App\Models\Routes;
use App\Models\SubModules;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next):Response
    {
        $user = User::find(Auth::user()->id);
        $user_role = $user->roles;
        $flag = false;

        foreach ($user_role as $role) {
            $role_id = $role->getOriginal()['id'];
            $modules = RolesAccess::where(['roles_id' => $role_id])->orderBy('modules_id', 'asc')->get(['modules_id']);
            foreach ($modules as $module) {
                $sub_module = SubModules::where(['module_id' => $module->modules_id])->get(['id', 'sub_module']);
                foreach ($sub_module as $sub){
                    $routes = Routes::where(['sub_module_id' => $sub->id])->get();
                    foreach ($routes as $route){
                        $path = config('app.url'). '/' . $request->path();
                        $parameters = [
                            'user' => str_contains($route->parameter, 'user') ? Auth::user()->id : null,
                            'job' => str_contains($route->parameter, 'jobs') ? 1 : null,
                            'both' => str_contains($route->parameter, '|') ? true : null
                        ];
                        $routes = [];
                        if($route->has_parameter){
                            if($parameters['both']){
                                $jobs = Jobs::where(['user_id' => Auth::user()->id])->get();
                                foreach ($jobs as $job){
                                    $route_val3 = route($route->route, ['user' => Auth::id(), 'jobs' => $job->id]);
                                    $routes[] = $route_val3;
                                }
                            } else{
                                $route_val1 = route($route->route, $parameters['both'] ?? ($parameters['user'] ?? $parameters['jobs']));
                                $routes[] = $route_val1;
                            }
                        } else{
                            $route_val2 = route($route->route);
                            $routes[] = $route_val2;
                        }

                        foreach ($routes as $accessed_routes)
                            if($path === $accessed_routes){
                                $flag = true;
                                break;}
                    }
                }
            }
        }

        if ($flag)
            return $next($request);
        else
            abort(403, 'Unauthorized access');
    }
}

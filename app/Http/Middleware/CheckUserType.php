<?php

namespace App\Http\Middleware;

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
                            'user' => $request->route()->parameter('user') !== null ? Auth::user()->id : null,
                            'job' => $request->route()->parameter('job') !== null ? 1 : null,
                        ];
//                        var_dump(route($route->route, ['user'=> 1, 'job'=> 1]));

                        $routesByName = Route::getRoutes();
//                        var_dump($routesByName);

                        if($path === route($route->route, ['user'=> 1, 'job'=> 1])){
                            $flag = true;
                            break;}
//                        } else {
//                            return $next($request);
//                        }
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

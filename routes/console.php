<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('make:view {name} {--route=}', function(string $name) {
    $route_config = $this->option('route') ? "resources/views/{$this->option('route')}/$name.blade.php" : "resources/views/$name.blade.php";
    $route = $route_config;
    $info = $this->option('route') ? "View created at resources/views/{$this->option('route')}/$name.blade.php" : "View created at resources/views/$name.blade.php";

    $view_create = fopen($route, 'w') or die('Unable to open file!');
    $view_appendables = '
        <x-base>
            <x-navbar />
        </x-base>
    ';
    fwrite($view_create, $view_appendables);
    fclose($view_create);

    $this->info($info);
})->purpose('Create views for delevia');

Artisan::command('delete:view {name} {--route=}', function(string $name) {
    $route_config = $this->option('route') ? "resources/views/{$this->option('route')}/$name.blade.php" : "resources/views/$name.blade.php";
    $route = $route_config;
    $info = $this->option('route') ? "View deleted at resources/views/{$this->option('route')}/$name.blade.php" : "View deleted at resources/views/$name.blade.php";

    unlink($route);

    $this->info($info);
})->purpose('Delete views for delevia');
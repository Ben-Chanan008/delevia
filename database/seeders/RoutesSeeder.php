<?php

namespace Database\Seeders;

use App\Models\Routes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $routeValues = [
            ['sub_module_id' => 1, 'route' => '/user/store', 'description' => 'Routes for Registration'],
            ['sub_module_id' => 2, 'route' => '/user/login', 'description' => 'Routes for Login'],
            ['sub_module_id' => 3, 'route' => '/jobs/{user}/create', 'description' => 'Routes for Job givers'],
            ['sub_module_id' => 4, 'route' => '/jobs/{user}/edit', 'description' => 'Routes for Job givers'],
            ['sub_module_id' => 5, 'route' => '/jobs/{user}/delete', 'description' => 'Routes for Job givers'],
            ['sub_module_id' => 6, 'route' => '/jobs/{user}/view-jobs', 'description' => 'Routes for Job seekers'],
            ['sub_module_id' => 7, 'route' => '/jobs/{user}/view-replies', 'description' => 'Routes for Job seekers'],
        ];

        foreach ($routeValues as $values)
            Routes::create($values);
    }
}

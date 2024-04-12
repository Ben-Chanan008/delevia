<?php

namespace Database\Seeders;

use App\Models\SubModules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sub_moduleValues = [
            ['module_id' => 1, 'sub_module' => 'registration', 'description' => 'Submodules for Registration'],
            ['module_id' => 1, 'sub_module' => 'login', 'description' => 'Submodules for Login'],
            ['module_id' => 2, 'sub_module' => 'create-job', 'description' => 'Submodules for Job givers'],
            ['module_id' => 2, 'sub_module' => 'edit-job', 'description' => 'Submodules for Job givers'],
            ['module_id' => 2, 'sub_module' => 'delete-job', 'description' => 'Submodules for Job givers'],
            ['module_id' => 3, 'sub_module' => 'view-jobs', 'description' => 'Submodules for Job seekers'],
            ['module_id' => 3, 'sub_module' => 'view-replies', 'description' => 'Submodules for Job seekers'],
        ];

        foreach ($sub_moduleValues as $values)
            SubModules::create($values);
    }
}

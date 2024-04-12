<?php

namespace Database\Seeders;

use App\Models\Modules;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $moduleValues = [
            ['module' => 'user', 'description' => 'The module for Users'],
            ['module' => 'job-giver', 'description' => 'The module for Job givers'],
            ['module' => 'job-seeker', 'description' => 'The module for Job seekers'],
        ];

        foreach ($moduleValues as $values)
            Modules::create($values);
    }
}

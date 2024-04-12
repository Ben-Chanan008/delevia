<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roleValues = [
            ['role' => 'Admin', 'description' => 'Role for super Admin'],
            ['role' => 'Job giver', 'description' => 'Route for Job giver'],
            ['role' => 'Job seeker', 'description' => 'Route for Job Seeker ']
        ];

        foreach ($roleValues as $values)
            Roles::create($values);
    }
}

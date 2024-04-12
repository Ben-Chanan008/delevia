<?php

namespace Database\Seeders;

use App\Models\RolesAccess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roleValues = [
            ['role_id' => 1, 'module_id' => 1, 'has_edit' => 1, 'has_create' => 1, 'has_delete' => 1],
            ['role_id' => 1, 'module_id' => 2, 'has_edit' => 1, 'has_create' => 1, 'has_delete' => 1],
            ['role_id' => 1, 'module_id' => 3, 'has_edit' => 1, 'has_create' => 1, 'has_delete' => 1],
            ['role_id' => 2, 'module_id' => 2, 'has_edit' => 1, 'has_create' => 1, 'has_delete' => 1],
            ['role_id' => 2, 'module_id' => 1, 'has_edit' => 1, 'has_create' => 1, 'has_delete' => 1],
            ['role_id' => 3, 'module_id' => 3, 'has_edit' => 1, 'has_create' => 1, 'has_delete' => 1],
            ['role_id' => 3, 'module_id' => 1, 'has_edit' => 1, 'has_create' => 1, 'has_delete' => 1],
        ];

        foreach ($roleValues as $values)
            RolesAccess::create($values);
    }
}

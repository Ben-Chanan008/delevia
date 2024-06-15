<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubModules>
 */
class SubModulesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public array $array = [
      /*1*/  ['module_id' => 1, 'sub_module' => 'login', 'description' => 'Description for login system'],
        /*2*/ ['module_id' => 1, 'sub_module' => 'register', 'description' => 'Description for login system'],
        /*3*/['module_id' => 2, 'sub_module' => 'view-jobs', 'description' => 'Description for viewing jobs'],
        /*4*/['module_id' => 3, 'sub_module' => 'create-job', 'description' => 'Description for Creating jobs'],
        /*5*/['module_id' => 3, 'sub_module' => 'edit-job', 'description' => 'Description for edit job'],
        /*6*/['module_id' => 3, 'sub_module' => 'jobs-owned', 'description' => 'Description for seeing jobs owned'],
        /*7*/['module_id' => 3, 'sub_module' => 'jobs-delete', 'description' => 'Description for deleting jobs'],
        /*8*/['module_id' => 3, 'sub_module' => 'view-companies', 'description' => 'Description for seeing companies'],
        /*9*/['module_id' => 3, 'sub_module' => 'create-company', 'description' => 'Description for creating companies'],
        /*10*/['module_id' => 3, 'sub_module' => 'giver-profile', 'description' => 'Description for giver\'s seeing their profile'],
        /*11*/['module_id' => 2, 'sub_module' => 'seeker-profile', 'description' => 'Description for seeker\'s seeing their profile'],
        /*12*/['module_id' => 2, 'sub_module' => 'apply-jobs', 'description' => 'Description for seeker\'s applying for a job'],
    ];

    public function definition(): array
    {
        return [
            //
        ];
    }

    public function createData(): array
    {
        return $this->array;
    }
}
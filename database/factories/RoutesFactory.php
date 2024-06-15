<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoutesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public array $array = [
        ['sub_module_id' => 1, 'route' => 'user.login', 'description' => NULL, 'has_parameter' => 0, 'parameter' => NULL],
        ['sub_module_id' => 2, 'route' => 'user.register', 'description' => NULL, 'has_parameter' => 0, 'parameter' => NULL],
        ['sub_module_id' => 4, 'route' => 'jobs.create', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user'],
        ['sub_module_id' => 4, 'route' => 'jobs.store', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user'],
        ['sub_module_id' => 9, 'route' => 'jobs.show-create-company', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user'],
        ['sub_module_id' => 9, 'route' => 'jobs.create-company', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user'],
        ['sub_module_id' => 6, 'route' => 'jobs.view-applicants', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'job'],
        ['sub_module_id' => 5, 'route' => 'jobs.show_edit', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user|job'],
        ['sub_module_id' => 5, 'route' => 'jobs.edit', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user|job'],
        ['sub_module_id' => 6, 'route' => 'jobs.applicant', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'job|applicant'],
        ['sub_module_id' => 7, 'route' => 'jobs.delete', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user|job'],
        ['sub_module_id' => 8, 'route' => 'jobs.view-companies', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user'],
        ['sub_module_id' => 12, 'route' => 'jobs.apply', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'job'],
        ['sub_module_id' => 10, 'route' => 'user.profile', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user'],
        ['sub_module_id' => 11, 'route' => 'user.profile', 'description' => NULL, 'has_parameter' => 1, 'parameter' => 'user'],
        ['sub_module_id' => 3, 'route' => 'jobs.seeker', 'description' => NULL, 'has_parameter' => 0, 'parameter' => NULL],
        ['sub_module_id' => 6, 'route' => 'jobs.giver', 'description' => NULL, 'has_parameter' => 0, 'parameter' => NULL],
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
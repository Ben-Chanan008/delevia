<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Roles>
 */
class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            [
                'role' => 'Admin',
                'description' => 'The super role'
            ],
            [
                'module' => 'Job giver',
                'description' => 'The job-giver role'
            ],
            [
                'module' => 'Job seeker',
                'description' => 'The job-seeker role'
            ],
        ];
    }
}

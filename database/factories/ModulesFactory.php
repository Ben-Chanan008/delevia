<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modules>
 */
class ModulesFactory extends Factory
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
                'module' => 'user',
                'description' => 'The module for users'
            ],
            [
                'module' => 'job-giver',
                'description' => 'The module for job-givers'
            ],
            [
                'module' => 'job-seeker',
                'description' => 'The module for job-seekers'
            ],
        ];
    }
}

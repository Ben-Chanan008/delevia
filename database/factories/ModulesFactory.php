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
    public array $array = [
        [
            'module' => 'user',
            'description' => 'Module description for user'
        ],
        [
            'module' => 'job-seeker',
            'description' => 'Module description for job-seekers'
        ],
        [
            'module' => 'job-giver',
            'description' => 'Module description for job-givers'
        ]
    ];
    public function definition(): array
    {
        return [];
    }

    public function createData(): array
    {
        return $this->array;
    }
}
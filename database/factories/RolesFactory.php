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

    public array $array = [
        ['role' => 'Super Admin', 'description' => 'Role for super admin, the alpha!'],
        ['role' => 'Job Seeker', 'description' => 'Role for jobs seeker, the seeker!'],
        ['role' => 'Job Giver', 'description' => 'Role for jobs giver, the giver!'],
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
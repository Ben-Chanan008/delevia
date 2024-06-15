<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RolesAccessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public array $array = [
        ['role_id' => '1', 'module_id' => 1, 'has_create' => 1, 'has_edit' => 1, 'has_delete' => 1],
        ['role_id' => '1', 'module_id' => 2, 'has_create' => 1, 'has_edit' => 1, 'has_delete' => 1],
        ['role_id' => '1', 'module_id' => 3, 'has_create' => 1, 'has_edit' => 1, 'has_delete' => 1],
        ['role_id' => '2', 'module_id' => 1, 'has_create' => 1, 'has_edit' => 1, 'has_delete' => 1],
        ['role_id' => '2', 'module_id' => 2, 'has_create' => 1, 'has_edit' => 1, 'has_delete' => 1],
        ['role_id' => '3', 'module_id' => 1, 'has_create' => 1, 'has_edit' => 1, 'has_delete' => 1],
        ['role_id' => '3', 'module_id' => 3, 'has_create' => 1, 'has_edit' => 1, 'has_delete' => 1],
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
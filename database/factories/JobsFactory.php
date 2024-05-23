<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 2,
            'title' => fake()->text(10),
            'tags' => 'random,random',
            'company_id' => 1,
            'description' => $this->faker->text(120),
            'degree_req' => 'Harvard Degree',
            'experience' => 'No experience',
            'salary' => $this->faker->randomFloat(2, 1, 15),
            'rate' => '/hr',
            'currency' => 1,
            'job_type' => 'on site',
            'location' => $this->faker->city(),
        ];
    }
}
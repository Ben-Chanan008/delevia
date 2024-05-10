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
            'user_id' => 8,
            'title' => fake()->text(10),
            'company_id' => 2,
            'tags' => 'random,random',
            'location' => $this->faker->city(),
            'description' => $this->faker->text(120),
            'experience' => 'No experience',
            'salary' => $this->faker->randomFloat(2, 1, 15),
            'rate' => '/hr',
            'job_type' => 'on site',
            'degree_req' => 'Harvard Degree',
            'currency' => 1
        ];
    }
}

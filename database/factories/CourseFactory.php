<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hours = $this->faker->numberBetween(1, 15);
        $minuts = $this->faker->numberBetween(1, 59);

        return [
            'title' => ucfirst(fake()->words(rand(2, 6), true)),
            'description' => fake()->text(),
            
            
        ];
    }
}

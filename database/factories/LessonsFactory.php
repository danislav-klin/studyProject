<?php

namespace Database\Factories;

use App\Models\Course;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon as SupportCarbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lessons>
 */
class LessonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::inRandomOrder()->first()->id,
            'number' => 1,
            'title' => ucfirst(fake()->words(mt_rand(2, 6), true)),
            'length' => fake()->numberBetween(SupportCarbon::SECONDS_PER_MINUTE, 20 * SupportCarbon::SECONDS_PER_MINUTE),
        ];
    }
}

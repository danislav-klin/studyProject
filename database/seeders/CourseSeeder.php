<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private array $data = [
        [
            'title' => 'Vue composition API',
            'description' => 'Project development',
            'lessons_count' => '123',
            'length' => '15h 38min',
        ],
        [
            'title' => 'Vue composition API',
            'description' => 'Project development',
            'lessons_count' => '163',
            'length' => '15h 38min',
        ],
        [
            'title' => 'Vue composition API',
            'description' => 'Project development',
            'lessons_count' => '23',
            'length' => '15h 38min',
        ],
    ];

    public function run(): void
    {

        Course::truncate();

        Course::factory(50)
            ->sequence(fn (Sequence $sequence) => $this->data[$sequence->index] ?? [])
            ->create();
    }
}

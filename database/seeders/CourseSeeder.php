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
           
        ],
        [
            'title' => 'Vue composition API',
            'description' => 'Project development',
           
        ],
        [
            'title' => 'Vue composition API',
            'description' => 'Project development',
          
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

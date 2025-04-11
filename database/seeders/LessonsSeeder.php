<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lessons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lessons::truncate();

        Course::each(function (Course $course) {
            collect()
            ->range(1, mt_rand(5, 20))
            ->each(function ($number) use ($course) {
                Lessons::factory()->for($course)->create(['number' => $number]);
            });
        }); 
            
    }
}

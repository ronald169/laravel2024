<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 48; $i++) {
            $this->createExercise($i);
        }
    }

    protected function createExercise($lesson)
    {
        for ($i = 0; $i < 3; $i++) {
            Exercise::factory()->create([
                'title' => "Exercise $i",
                'slug' => random_int(99, 99999) . Str::slug("-Lesson-$lesson-Exercise 1"),
                'user_id' => rand(1, 2),
                'lesson_id' => $lesson,
                'pinned' => $lesson == $i
            ]);
        }
    }
}

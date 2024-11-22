<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 3; $i <= 5; $i++) {
            $this->createExerciseResult($i);
        }
    }

    protected function createExerciseResult($student)
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('exercise_results')->insert([
                'work' => fake()->paragraphs(10, true),
                'score' => rand(1, 9) * 10,
                'user_id' => $student,
                'exercise_id' => rand(1, 144)
            ]);
        }
    }
}

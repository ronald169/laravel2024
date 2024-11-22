<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 3; $i < 5; $i++) {
            $this->createQuizResult($i);
        }
    }

    protected function createQuizResult($student)
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('quiz_results')->insert([
                'score' => rand(1, 9) * 10,
                'user_id' => $student,
                'quiz_question_id' => rand(1, 96)
            ]);
        }
    }
}

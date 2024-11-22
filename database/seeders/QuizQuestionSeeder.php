<?php

namespace Database\Seeders;

use App\Models\QuizQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 96; $i++) {
            $this->createQuizQuestion($i);
        }
    }

    public function createQuizQuestion($quiz)
    {
        for ($i = 1; $i < 3; $i++) {
            QuizQuestion::factory()->create([
                'question' => "Question $i",
                'single_or_multiple' => (rand(0, 5) == 5) ? true : false,
                'user_id' => rand(1, 2),
                'quiz_id' => $quiz,
            ]);
        }
    }
}

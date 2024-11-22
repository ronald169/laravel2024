<?php

namespace Database\Seeders;

use App\Models\Quiz;
use DragonCode\Support\Facades\Filesystem\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 48; $i++) {
            $this->createQuiz($i);
        }
    }

    protected function createQuiz($lesson)
    {

        for ($i = 1; $i <= 2; $i++) {
            Quiz::factory()->create([
                'title' => "Quiz $i",
                'slug' => rand(999, 9999) . Str::slug("-lesson $lesson-Quiz $i"),
                'user_id' => rand(1, 2),
                'lesson_id' => $lesson,
                'pinned' => (rand(0, 20) == 7) ? true : false,
            ]);
        }
    }
}

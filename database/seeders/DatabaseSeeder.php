<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // UserSeeder::class,
            // ClasseSeeder::class,
            // SerieSeeder::class,
            // CourseSeeder::class,
            // LessonSeeder::class,
            // ExerciseSeeder::class,
            ExerciseResultSeeder::class,
            QuizSeeder::class,
            QuizQuestionSeeder::class,
            QuizResultSeeder::class,
        ]);
    }
}

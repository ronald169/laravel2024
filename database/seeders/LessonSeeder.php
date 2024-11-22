<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            $this->createLesson($i);
        }
    }

    protected function createLesson($course)
    {

        for ($i = 1; $i <= 4; $i++) {
            Lesson::factory()->create([
                'title' => "lesson $i",
                'slug' => Str::slug(random_int(99, 9999) . "course-$course-lesson $i"),
                'order' => $i,
                'pinned' => $i == $course,
                'course_id' => $course,
                'user_id' => rand(1, 2)
            ]);
        }
    }
}

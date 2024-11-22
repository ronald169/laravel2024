<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createCourse(1, 1);
        $this->createCourse(1, 2);
        $this->createCourse(1, 3);

        $this->createCourse(2, 1);
        $this->createCourse(2, 2);
        $this->createCourse(2, 3);

        $this->createCourse(3, 1);
        $this->createCourse(3, 2);
        $this->createCourse(3, 3);

        $this->createCourse(4, 1);
        $this->createCourse(4, 2);
        $this->createCourse(4, 3);
    }

    protected function createCourse($matiere, $classe)
    {

        $matieres = ['maths', 'maths', 'physique', 'chimie', 'infos'];

        $classes = ['3 (troisieme)', '3 (troisieme)', '1 (premiere)', 'Tle (terminal)'];

        $date = generateRandomDateInRange('2022-01-01', '2024-07-01');

        return Course::factory()->create([
            'title' => "Cours de $matieres[$matiere] $classes[$classe]",
            'slug' => Str::slug("Cours de $matieres[$matiere] $classes[$classe]"),
            'user_id' => rand(1, 2),
            'classe_id' => $classe,
            'serie_id' => rand(1, 3),
            'created_at' => $date,
            'updated_at' => $date,
            'pinned' => 3 == $matiere
        ]);
    }
}

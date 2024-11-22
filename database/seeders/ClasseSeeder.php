<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'title' => '3 (troisieme)',
                'slug' => '3-troisieme',
                'order' => 4
            ],
            [
                'title' => '1 (premiere)',
                'slug' => '1-premiere',
                'order' => 6
            ],
            [
                'title' => 'Tle (terminal)',
                'slug' => 'terminal',
                'order' => 7
            ],
        ];

        foreach ($classes as $classe) {
            Classe::create($classe);
        }
    }
}

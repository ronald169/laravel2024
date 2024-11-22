<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $series = [
            [
                'title' => 'A (litteraire)',
                'slug' => 'a-litteraire'
            ],
            [
                'title' => 'C (scientifique)',
                'slug' => 'c-scientifique'
            ],
            [
                'title' => 'D (scientifique)',
                'slug' => 'd-scientifique'
            ],
        ];

        foreach ($series as $serie) {
            Serie::create($serie);
        }
    }
}

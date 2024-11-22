<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $score = [10, 20, 30, 40, 50, 100];

        return [
            'description' => fake()->paragraph(),
            'image' => generateFakeImage(),
            'content' => fake()->paragraphs(rand(15, 25), true),
            'solution' => fake()->paragraphs(rand(15, 25), true),
            'seo_title' => fake()->sentence(),
            'score' => $score[rand(0, 5)],
            'meta_description' => fake()->paragraph(),
            'meta_keywords' => implode(',', fake()->words()),
        ];
    }
}

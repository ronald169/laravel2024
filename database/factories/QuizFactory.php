<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $score = [2, 4, 6, 9];

        return [
            'description' => fake()->paragraph(),
            'image' => generateFakeImage(),
            'score' => $score[rand(0, 3)],
            'seo_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
            'meta_keywords' => implode(',', fake()->words()),
        ];
    }
}

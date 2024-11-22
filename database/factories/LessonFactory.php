<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->paragraph(),
            'image' => generateFakeImage(),
            'content' => fake()->paragraphs(rand(15, 25), true),
            'seo_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
            'meta_keywords' => implode(',', fake()->words()),
        ];
    }
}

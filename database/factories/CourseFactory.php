<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'seo_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
            'meta_keywords' => implode(',', fake()->words()),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuizQuestion>
 */
class QuizQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $choices = ['option 1', 'option 2', 'option 3', 'option 4'];

        return [
            'choices' => json_encode($choices),
            'correct_answer' => $choices[rand(0, 3)],
            'explanation' => fake()->paragraph,
        ];
    }
}

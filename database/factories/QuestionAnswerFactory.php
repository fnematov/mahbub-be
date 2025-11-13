<?php

namespace Database\Factories;

use App\Models\QuestionAnswer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<QuestionAnswer>
 */
class QuestionAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_uz' => $this->faker->sentence() . ' (UZ)',
            'question_ru' => $this->faker->sentence() . ' (RU)',
            'question_en' => $this->faker->sentence() . ' (EN)',
            'answer_uz' => $this->faker->paragraph() . ' (UZ)',
            'answer_ru' => $this->faker->paragraph() . ' (RU)',
            'answer_en' => $this->faker->paragraph() . ' (EN)',
        ];
    }
}

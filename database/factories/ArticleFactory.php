<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_uz' => $this->faker->sentence() . ' (UZ)',
            'title_ru' => $this->faker->sentence() . ' (RU)',
            'title_en' => $this->faker->sentence() . ' (EN)',
            'description_uz' => $this->faker->paragraph() . ' (UZ)',
            'description_ru' => $this->faker->paragraph() . ' (RU)',
            'description_en' => $this->faker->paragraph() . ' (EN)',
            'content_uz' => $this->faker->text(500) . ' (UZ)',
            'content_ru' => $this->faker->text(500) . ' (RU)',
            'content_en' => $this->faker->text(500) . ' (EN)',
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
        ];
    }
}

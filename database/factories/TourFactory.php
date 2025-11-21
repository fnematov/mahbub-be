<?php

namespace Database\Factories;

use App\Enums\TourStatusEnum;
use App\Models\Location;
use App\Models\Media;
use App\Models\Tour;
use App\Models\TourRoute;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tour>
 */
class TourFactory extends Factory
{
    public function definition(): array
    {
        return [
            'location_id' => Location::inRandomOrder()->whereNotNull('parent_id')->first()->id,
            'name_uz' => $this->faker->sentence(3) . ' (UZ)',
            'name_ru' => $this->faker->sentence(3) . ' (RU)',
            'name_en' => $this->faker->sentence(3) . ' (EN)',
            'status' => $this->faker->randomElement(TourStatusEnum::values()),
            'price_adult' => $this->faker->randomFloat(2, 100, 2000),
            'price_child' => $this->faker->randomFloat(2, 50, 1000),
            'days_count' => $this->faker->numberBetween(1, 14),
            'nights_count' => $this->faker->numberBetween(1, 13),
            'info_tour_uz' => $this->faker->paragraph(),
            'info_tour_ru' => $this->faker->paragraph(),
            'info_tour_en' => $this->faker->paragraph(),
        ];
    }

    public function configure(): TourFactory|Factory
    {
        return $this->afterCreating(function (Tour $tour) {
            Media::factory(mt_rand(1, 5))
                ->create(['model_id' => $tour->id, 'model_type' => Tour::class]);

            TourRoute::factory(mt_rand(5, 15))->create(['tour_id' => $tour->id]);
        });
    }
}

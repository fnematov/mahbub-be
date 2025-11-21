<?php

namespace Database\Factories;

use App\Models\Tour;
use App\Models\TourGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TourGroupFactory extends Factory
{
    protected $model = TourGroup::class;

    public function definition(): array
    {
        return [
            'name_uz' => $this->faker->name(),
            'name_ru' => $this->faker->name(),
            'name_en' => $this->faker->name(),
            'description_uz' => $this->faker->text(),
            'description_ru' => $this->faker->text(),
            'description_en' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    public function configure(): TourGroupFactory
    {
        return $this->afterCreating(function (TourGroup $tourGroup) {
            $tourGroup->tours()->attach(Tour::inRandomOrder()->limit(mt_rand(5, 15))->pluck('id')->toArray());
        });
    }
}

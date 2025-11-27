<?php

namespace Database\Seeders;

use App\Enums\TourStatusEnum;
use App\Models\Location;
use App\Models\Media;
use App\Models\Tour;
use App\Models\TourRoute;
use Illuminate\Database\Seeder;

class ToursSeeder extends Seeder
{
    public function run(): void
    {
        // Get all cities (locations with a parent_id)
        $cities = Location::whereNotNull('parent_id')->get();

        if ($cities->isEmpty()) {
            $this->command->info('No cities found. Please run LocationsSeeder first.');
            return;
        }

        foreach ($cities as $city) {
            // Create 1-3 tours for each city
            $toursCount = rand(1, 3);

            for ($i = 0; $i < $toursCount; $i++) {
                $tour = Tour::create([
                    'location_id' => $city->id,
                    'name_uz' => "Sayohat: {$city->name_uz}",
                    'name_ru' => "Тур: {$city->name_ru}",
                    'name_en' => "Tour: {$city->name_en}",
                    'status' => TourStatusEnum::ACTIVE,
                    'price_adult' => rand(100, 500),
                    'price_child' => rand(50, 250),
                    'days_count' => rand(3, 7),
                    'nights_count' => rand(2, 6),
                    'info_tour_uz' => "Bu {$city->name_uz} bo'ylab ajoyib sayohat.",
                    'info_tour_ru' => "Это удивительный тур по {$city->name_ru}.",
                    'info_tour_en' => "This is an amazing tour in {$city->name_en}.",
                    'event_months' => [rand(1, 12), rand(1, 12)],
                ]);

                // Create Media for the tour
                Media::factory()->count(rand(1, 3))->create([
                    'model_type' => Tour::class,
                    'model_id' => $tour->id,
                ]);

                // Create Tour Routes
                $this->createTourRoutes($tour);
            }
        }
    }

    private function createTourRoutes(Tour $tour): void
    {
        $routes = [
            [
                'name_uz' => 'Shahar markazi',
                'name_ru' => 'Центр города',
                'name_en' => 'City Center',
                'description_tour_uz' => 'Shahar markazi bo\'ylab piyoda sayohat.',
                'description_tour_ru' => 'Пешеходная экскурсия по центру города.',
                'description_tour_en' => 'Walking tour around the city center.',
            ],
            [
                'name_uz' => 'Tarixiy obidalar',
                'name_ru' => 'Исторические памятники',
                'name_en' => 'Historical Monuments',
                'description_tour_uz' => 'Qadimiy binolar va yodgorliklarni ziyorat qilish.',
                'description_tour_ru' => 'Посещение древних зданий и памятников.',
                'description_tour_en' => 'Visiting ancient buildings and monuments.',
            ],
            [
                'name_uz' => 'Tabiat qo\'yni',
                'name_ru' => 'На лоне природы',
                'name_en' => 'In the lap of nature',
                'description_tour_uz' => 'Shahar chetidagi go\'zal tabiat manzaralari.',
                'description_tour_ru' => 'Красивые природные пейзажи за городом.',
                'description_tour_en' => 'Beautiful natural landscapes outside the city.',
            ],
        ];

        // Pick 1-2 random routes for each tour
        $selectedRoutes = array_rand($routes, rand(1, 2));
        if (!is_array($selectedRoutes)) {
            $selectedRoutes = [$selectedRoutes];
        }

        foreach ($selectedRoutes as $key) {
            $routeData = $routes[$key];
            $routeData['tour_id'] = $tour->id;
            $routeData['add_price_adult'] = rand(10, 50);
            $routeData['add_price_child'] = rand(5, 25);

            TourRoute::create($routeData);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\TourGroup;
use Illuminate\Database\Seeder;

class TourGroupsSeeder extends Seeder
{
    public function run(): void
    {
        $groups = [
            [
                'name_uz' => 'Hissiyotlarga ko\'ra turlar tanlovi',
                'name_ru' => 'Подбор туры по эмоциям',
                'name_en' => 'Selection of tours by emotions',
                'description_uz' => 'Sizning kayfiyatingizga mos turlar to\'plami.',
                'description_ru' => 'Коллекция туров, соответствующих вашему настроению.',
                'description_en' => 'A collection of tours to match your mood.',
                'order' => 1,
            ],
            [
                'name_uz' => 'Yaqin oradagi turlar',
                'name_ru' => 'Ближайшие туры',
                'name_en' => 'Upcoming tours',
                'description_uz' => 'Tez orada boshlanadigan eng qiziqarli turlar.',
                'description_ru' => 'Самые интересные туры, которые начнутся в ближайшее время.',
                'description_en' => 'The most interesting tours starting soon.',
                'order' => 2,
            ],
            [
                'name_uz' => 'Hissiyotlar galereyasi',
                'name_ru' => 'Галерея эмоций',
                'name_en' => 'Gallery of emotions',
                'description_uz' => 'Sayohatlardan unutilmas lahzalar.',
                'description_ru' => 'Незабываемые моменты из путешествий.',
                'description_en' => 'Unforgettable moments from travels.',
                'order' => 3,
            ],
        ];

        $tours = Tour::all();

        if ($tours->isEmpty()) {
            $this->command->info('No tours found. Please run ToursSeeder first.');
            return;
        }

        foreach ($groups as $groupData) {
            $group = TourGroup::create($groupData);

            // Attach 3-6 random tours to each group
            $randomTours = $tours->random(min($tours->count(), rand(3, 6)));
            $group->tours()->attach($randomTours);
        }
    }
}

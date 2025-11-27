<?php

namespace Database\Seeders;

use App\Enums\BaseStatusEnum;
use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            [
                'name_uz' => 'O\'zbekiston',
                'name_ru' => 'Узбекистан',
                'name_en' => 'Uzbekistan',
                'flag' => 'uzb-flag.svg',
                'children' => [
                    ['name_uz' => 'Toshkent', 'name_ru' => 'Ташкент', 'name_en' => 'Tashkent'],
                    ['name_uz' => 'Samarqand', 'name_ru' => 'Самарканд', 'name_en' => 'Samarkand'],
                    ['name_uz' => 'Buxoro', 'name_ru' => 'Бухара', 'name_en' => 'Bukhara'],
                    ['name_uz' => 'Xiva', 'name_ru' => 'Хива', 'name_en' => 'Khiva'],
                ]
            ],
            [
                'name_uz' => 'Turkiya',
                'name_ru' => 'Турция',
                'name_en' => 'Turkey',
                'flag' => 'turkie-flug.svg',
                'children' => [
                    ['name_uz' => 'Istanbul', 'name_ru' => 'Стамбул', 'name_en' => 'Istanbul'],
                    ['name_uz' => 'Anqara', 'name_ru' => 'Анкара', 'name_en' => 'Ankara'],
                    ['name_uz' => 'Antaliya', 'name_ru' => 'Анталья', 'name_en' => 'Antalya'],
                    ['name_uz' => 'Kapadokiya', 'name_ru' => 'Каппадокия', 'name_en' => 'Cappadocia'],
                ]
            ],
            [
                'name_uz' => 'Misr',
                'name_ru' => 'Египет',
                'name_en' => 'Egypt',
                'flag' => 'egypt-flag.svg',
                'children' => [
                    ['name_uz' => 'Qohira', 'name_ru' => 'Каир', 'name_en' => 'Cairo'],
                    ['name_uz' => 'Sharm ash-Shayx', 'name_ru' => 'Шарм-эль-Шейх', 'name_en' => 'Sharm El Sheikh'],
                    ['name_uz' => 'Xurgada', 'name_ru' => 'Хургада', 'name_en' => 'Hurghada'],
                ]
            ],
            [
                'name_uz' => 'Tailand',
                'name_ru' => 'Таиланд',
                'name_en' => 'Thailand',
                'flag' => 'thailand-flag.svg',
                'children' => [
                    ['name_uz' => 'Bangkok', 'name_ru' => 'Бангкок', 'name_en' => 'Bangkok'],
                    ['name_uz' => 'Pxuket', 'name_ru' => 'Пхукет', 'name_en' => 'Phuket'],
                    ['name_uz' => 'Pattaya', 'name_ru' => 'Паттайя', 'name_en' => 'Pattaya'],
                ]
            ],
            [
                'name_uz' => 'Gruziya',
                'name_ru' => 'Грузия',
                'name_en' => 'Georgia',
                'flag' => 'georgia-flag.svg',
                'children' => [
                    ['name_uz' => 'Tbilisi', 'name_ru' => 'Тбилиси', 'name_en' => 'Tbilisi'],
                    ['name_uz' => 'Batumi', 'name_ru' => 'Батуми', 'name_en' => 'Batumi'],
                ]
            ],
            [
                'name_uz' => 'Malayziya',
                'name_ru' => 'Малайзия',
                'name_en' => 'Malaysia',
                'flag' => 'malaysia-flag.svg',
                'children' => [
                    ['name_uz' => 'Kuala-Lumpur', 'name_ru' => 'Куала-Лумпур', 'name_en' => 'Kuala Lumpur'],
                    ['name_uz' => 'Langkavi', 'name_ru' => 'Лангкави', 'name_en' => 'Langkawi'],
                ]
            ],
        ];

        foreach ($countries as $countryData) {
            $children = $countryData['children'] ?? [];
            unset($countryData['children']);

            $countryData['status'] = BaseStatusEnum::ACTIVE;
            $country = Location::create($countryData);

            foreach ($children as $childData) {
                $childData['parent_id'] = $country->id;
                $childData['status'] = BaseStatusEnum::ACTIVE;
                // Use country flag for cities as well, or keep it empty/null if allowed?
                // Migration says not null. So we must provide it.
                // We'll use the country's flag for the city.
                $childData['flag'] = $countryData['flag'];
                Location::create($childData);
            }
        }
    }
}

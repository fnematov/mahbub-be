<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title_ru' => 'Экзотические туры по Узбекистану',
                'title_uz' => 'O\'zbekiston bo\'ylab ekzotik turlar',
                'title_en' => 'Exotic tours across Uzbekistan',
                'main_info_ru' => 'Наслаждайтесь с путеществием по Узбекистану и откройте для себя много нового',
                'main_info_uz' => 'O\'zbekiston bo\'ylab sayohat qiling va o\'zingiz uchun ko\'p yangiliklar kashf eting',
                'main_info_en' => 'Enjoy traveling around Uzbekistan and discover a lot of new things',
                'url' => url(route('tours'))
            ],
            [
                'title_ru' => 'Горячие туры по Европе',
                'title_uz' => 'Yevropa bo\'ylab qaynos turlar',
                'title_en' => 'Top tours across Europe',
                'main_info_ru' => 'Наслаждайтесь с путеществием по Узбекистану и откройте для себя много нового',
                'main_info_uz' => 'O\'zbekiston bo\'ylab sayohat qiling va o\'zingiz uchun ko\'p yangiliklar kashf eting',
                'main_info_en' => 'Enjoy traveling around Uzbekistan and discover a lot of new things',
                'url' => url(route('tours'))
            ]
        ];

        foreach ($items as $item) {
            Services::factory()->create($item);
        }
    }
}

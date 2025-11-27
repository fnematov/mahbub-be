<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    public function run(): void
    {
        $addresses = [
            [
                'address_uz' => '1 – Savdo ofisi manzili, Muqimiy ko\'chasi, Toshkent, O\'zbekiston',
                'address_ru' => '1 – Адрес офис продаж, улица Мукимий, Ташкент, Узбекистан',
                'address_en' => '1 – Sales office address, Muqimiy street, Tashkent, Uzbekistan',
                'location' => [
                    'lat' => 41.311151,
                    'lng' => 69.279737,
                ],
            ],
            [
                'address_uz' => '2 – Savdo ofisi manzili, Toshkent, O\'zbekiston',
                'address_ru' => '2 – Адрес офис продаж, Ташкент, Узбекистан',
                'address_en' => '2 – Sales office address, Tashkent, Uzbekistan',
                'location' => [
                    'lat' => 41.299496,
                    'lng' => 69.240074,
                ],
            ],
        ];

        foreach ($addresses as $address) {
            Address::create($address);
        }
    }
}

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
                'embed_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.2585478730734!2d69.23282986188912!3d41.3032387325795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bf4b3c4b8d9%3A0xfe0a30c5ce630d00!2sMahbub%20Tour%20Haj%20va%20Umra!5e0!3m2!1sen!2s!4v1764278008674!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ],
            [
                'address_uz' => '2 – Savdo ofisi manzili, Toshkent, O\'zbekiston',
                'address_ru' => '2 – Адрес офис продаж, Ташкент, Узбекистан',
                'address_en' => '2 – Sales office address, Tashkent, Uzbekistan',
                'embed_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176.6222308597667!2d67.25658137648671!3d37.23294187212695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f3531c9d3bec0ab%3A0x39077317c9847d84!2sMahbub%20Tour%20Termiz!5e0!3m2!1sen!2s!4v1764278054965!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ],
        ];

        foreach ($addresses as $address) {
            Address::create($address);
        }
    }
}

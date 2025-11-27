<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    public function run(): void
    {
        $contacts = [
            [
                'position_uz' => 'Operator',
                'position_ru' => 'Оператор',
                'position_en' => 'Operator',
                'manager_name' => 'Менеджербек',
                'phone1' => '+998 (88) 800 9000',
                'phone2' => '+998 (88) 800 9000',
                'working_days' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'],
                'from' => '10:00',
                'to' => '22:00',
            ],
            [
                'position_uz' => 'Tur Agent',
                'position_ru' => 'Тур Агент',
                'position_en' => 'Tour Agent',
                'manager_name' => 'Малика',
                'phone1' => '+998 (88) 800 9000',
                'phone2' => '+998 (88) 800 9000',
                'working_days' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'],
                'from' => '12:00',
                'to' => '18:00',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}

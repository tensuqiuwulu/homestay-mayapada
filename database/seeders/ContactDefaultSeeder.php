<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            ['type' => 'Instagram', 'contact' => '087762212544'],
            ['type' => 'Whatsapp', 'contact' => 'test@gmail.com'],
            ['type' => 'Email', 'contact' => '087762212544'],
            ['type' => 'Phone', 'contact' => '087762212544']
        ];

        Contact::insert($contacts);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'contact_name' => 'salma',
                'contact_email' => 'salma@gmail.com',
                'subject' => 'about packages',
                'message' => 'hello can i ask about if you have special package '
            ],
            [
                'contact_name' => 'Farah',
                'contact_email' => 'farahi@gmail.com',
                'subject' => 'about branch',
                'message' => 'Do you hava another bransh'
            ],
            [
                'contact_name' => 'Haneen',
                'contact_email' => 'haneen@gmail.com',
                'subject' => 'feedback',
                'message' => 'very comfortable place'
            ],
            [
                'contact_name' => 'Kholoud',
                'contact_email' => 'kholoud@gmail.com',
                'subject' => 'feedback',
                'message' => 'kind staff'
            ],
        ]);
    }
}

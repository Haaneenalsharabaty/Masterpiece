<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'service_name' => 'Blow Dry',

                'price' => '10',
                'category_id'=>'1',


            ],
            [
                'service_name' => 'Pedicure',

                'price' => '6',
                'category_id'=>'2',


            ],
            [
                'service_name' => 'pedicure with gelcolor',

                'price' => '15',
                'category_id'=>'2',


            ],
            [
                'service_name' => 'pedicure with color',

                'price' => '7',
                'category_id'=>'2',


            ],
            [
                'service_name' => 'extention for one nails',

                'price' => '5',
                'category_id'=>'2',


            ],
            [
                'service_name' => 'Fair – Starting from ',

                'price' => '10',
                'category_id'=>'1',


            ],
            [
                'service_name' => 'Hair cut',

                'price' => '10',
                'category_id'=>'1',



            ],
            [
                'service_name' => 'Manicure and Pedicure ',

                'price' => '14',
                'category_id'=>'2',



            ],
            [
                'service_name' => 'Full Makeup',

                'price' => '100',
                'category_id'=>'1',



            ],
            [
                'service_name' => 'Hair Updo',

                'price' => '60',
                'category_id'=>'1',



            ],
        ]);
    }
}

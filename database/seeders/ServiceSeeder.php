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

                'price' => '5',
                'category_id'=>'1',


            ],
            [
                'service_name' => 'hair cut',

                'price' => '7',
                'category_id'=>'1',


            ],
            [
                'service_name' => 'roots',

                'price' => '15',
                'category_id'=>'1',


            ],
            [
                'service_name' => 'Highlights or lowlights',

                'price' => '35',
                'category_id'=>'1',


            ],
            [
                'service_name' => 'Hair protein',

                'price' => '50',
                'category_id'=>'1',


            ],
            [
                'service_name' => 'Pedicure or Manicure',

                'price' => '6',
                'category_id'=>'2',


            ],
            [
                'service_name' => 'pedicure or Manicure with gelcolor',

                'price' => '15',
                'category_id'=>'2',


            ],
            [
                'service_name' => 'pedicure or Manicure with color',

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

                'price' => '50',
                'category_id'=>'1',



            ],
            [
                'service_name' => 'Hair Updo',

                'price' => '40',
                'category_id'=>'1',



            ],
            [
                'service_name' => 'bridal  pakage 1',

                'price' => '300',
                'category_id'=>'3',



            ],
            [
                'service_name' => 'bridal  pakage2',

                'price' => '200',
                'category_id'=>'3',



            ],
            [
                'service_name' => 'bridal  pakage 3',

                'price' => '150',
                'category_id'=>'3',



            ],
            [
                'service_name' => 'hydra facial',

                'price' => '100',
                'category_id'=>'4',



            ],
            [
                'service_name' => 'marocon bath',

                'price' => '35',
                'category_id'=>'4',



            ],
            [
                'service_name' => 'normal facial',

                'price' => '35',
                'category_id'=>'4',



            ],
            [
                'service_name' => 'bridal bath',

                'price' => '80',
                'category_id'=>'4',



            ],

        ]);
    }
}

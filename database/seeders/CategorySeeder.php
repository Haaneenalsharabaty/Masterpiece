<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Hair service',

            ],
            [
                'category_name' => 'nails service',


            ],
            [
                'category_name' => 'bridal',


            ],

            [
                'category_name' => 'skin care service',


            ],



        ]);
    }
}

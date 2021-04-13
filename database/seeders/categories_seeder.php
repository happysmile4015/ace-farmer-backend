<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class categories_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'name' => 'fruit',
        ]);
        DB::table('categories')->insert([
                'name' => 'crop',
        ]);
        DB::table('categories')->insert([
            'name' => 'vegetable',
        ]);
    }
}

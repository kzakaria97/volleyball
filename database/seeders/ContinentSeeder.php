<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            [
                'continent' => 'Europe',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'continent' => 'Asie',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'continent' => 'Afrique',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'continent' => 'Amérique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'continent' => 'Océanie',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

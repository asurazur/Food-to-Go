<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CanteenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Canteen::create([
        'name' => 'JBI Foodstop',
        'url' => 'menu',
        'gallery' => 'img/JBI.png'
        ]);
    }
}

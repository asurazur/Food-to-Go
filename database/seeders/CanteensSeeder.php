<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CanteensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        DB::table('canteens')->insert([
            [
                'name' => 'JBI Foodstop',
                'url' => 'menu',
                'gallery' => 'img/JBI.png'
            ],
            [
                'name' => 'Cocina',
                'url' => 'menu2',
                'gallery' => 'img/Cocina.png'
            ],
            [
                'name' => 'RC',
                'url' => 'menu3',
                'gallery' => 'img/RC.png'
            ],
            [
                'name' => 'Coko',
                'url' => 'menu4',
                'gallery' => 'img/coko.jpg'
            ],
            [
                'name' => 'kopi',
                'url' => 'menu5',
                'gallery' => 'img/kopi.jpg'
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
     DB::table('users')->insert([
        [
            'name'=>'Food To Go',
            'email' => 'foodtogo@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
            'is_stallowner' => false
        ],
        [
            'name'=>'Cocina',
            'email' => 'cocina@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
            'is_stallowner' => true
        ], 
    ]);
    }
}

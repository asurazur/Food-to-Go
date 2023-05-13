<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => "Stefan Nacional",
            'email' => "snacional@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
           
        ]);
        User::create([
            'name'=>'Food To Go',
            'email' => 'foodtogo@gmail.com',
            'password' => Hash::make('password'),
          
        ]);
        User::create([
        'name'=>'Cocina',
            'email' => 'cocina@gmail.com',
            'password' => Hash::make('password'),
           
        ]);
    }
}

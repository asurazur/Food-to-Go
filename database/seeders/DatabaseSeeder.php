<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            AdminWebSeeder::class,
            ProductSeeder::class,
            CanteensSeeder::class
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SiteSeeder::class,
            UserSeeder::class,
            MenuSeeder::class,
            MenuitemSeeder::class
        ]);
    }
}

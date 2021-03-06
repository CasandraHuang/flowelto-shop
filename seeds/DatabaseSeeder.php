<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BungaSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(UserSeeder::class);
    }
}

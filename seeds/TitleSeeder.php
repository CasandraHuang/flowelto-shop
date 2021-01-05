<?php

use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            'id' => 1,
            'title_bunga' => 'HandMades Bouquet (Gift)',
            'photo' => 'h1.1.jpg'
        ]);


        DB::table('titles')->insert([
            'id' => 2,
            'title_bunga' => 'Weddings Bouquet',
            'photo' => 'h1.2.jpg'
        ]);

        DB::table('titles')->insert([
            'id' => 3,
            'title_bunga' => 'Birthdays Bouquet',
            'photo' => 'h1.13.jpg'
        ]);

        DB::table('titles')->insert([
            'id' => 4,
            'title_bunga' => 'Event Bouquet',
            'photo' => 'h1.7.jpg'
        ]);
    }
}

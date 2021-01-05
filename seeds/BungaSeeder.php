<?php

use Illuminate\Database\Seeder;

class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bungas')->insert([
            'id' => 1,
            'titlebunga_id' =>1,
            'photo_bunga' => 'h1.1.jpg',
            'nama_bunga' => 'Aurora Rose',
            'harga' => 180000,
            'stok' => 100,
            'keterangan' => 'Bunga Rose Hand Made dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 2,
            'titlebunga_id' =>1,
            'photo_bunga' => 'h1.2.jpg',
            'nama_bunga' => 'Red Rose',
            'harga' => 190000,
            'stok' => 100,
            'keterangan' => 'Bunga Red Rose Hand Made dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 3,
            'titlebunga_id' =>1,
            'photo_bunga' => 'h1.3.jpg',
            'nama_bunga' => 'White Tulips',
            'harga' => 200000,
            'stok' => 400,
            'keterangan' => 'Bunga White Tulips dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 4,
            'titlebunga_id' =>1,
            'photo_bunga' => 'h1.4.jpg',
            'nama_bunga' => 'Pink Tulips',
            'harga' => 210000,
            'stok' => 50,
            'keterangan' => 'Bunga Pink Tulips dengan tambahan paper wrap dan Card'
        ]);
        

        DB::table('bungas')->insert([
            'id' => 5,
            'titlebunga_id' =>2,
            'photo_bunga' => 'h1.5.jpg',
            'nama_bunga' => 'Bucket Blossom Peach',
            'harga' => 390000,
            'stok' => 100,
            'keterangan' => 'Bunga Bucket Blossom Peach Hand Made dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 6,
            'titlebunga_id' =>2,
            'photo_bunga' => 'h1.6.jpg',
            'nama_bunga' => 'Bucket Blossom Plum',
            'harga' => 390000,
            'stok' => 100,
            'keterangan' => 'Bunga Bucket Blossom Peach Hand Made dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 7,
            'titlebunga_id' =>2,
            'photo_bunga' => 'h1.4.jpg',
            'nama_bunga' => 'Weddings Tulips',
            'harga' => 350000,
            'stok' => 400,
            'keterangan' => 'Bunga White Tulips dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 8,
            'titlebunga_id' =>1,
            'photo_bunga' => 'h1.12.jpg',
            'nama_bunga' => 'Rainbow Bouquet',
            'harga' => 510000,
            'stok' => 50,
            'keterangan' => 'Bunga Rainbow Bouquet dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 9,
            'titlebunga_id' =>1,
            'photo_bunga' => 'h1.5.jpg',
            'nama_bunga' => 'Plum Peach Oxtorfd',
            'harga' => 510000,
            'stok' => 50,
            'keterangan' => 'Bunga Plum Peach Oxtorfd Bouquet dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 10,
            'titlebunga_id' =>2,
            'photo_bunga' => 'h1.10.jpg',
            'nama_bunga' => 'Weddings Roses',
            'harga' => 390000,
            'stok' => 400,
            'keterangan' => 'Bunga Roses dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 11,
            'titlebunga_id' =>2,
            'photo_bunga' => 'h1.11.jpg',
            'nama_bunga' => 'White Bouquet',
            'harga' => 490000,
            'stok' => 400,
            'keterangan' => 'Bunga serba putih dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 12,
            'titlebunga_id' =>2,
            'photo_bunga' => 'h1.13.jpg',
            'nama_bunga' => 'Tropic Bouquet',
            'harga' => 490000,
            'stok' => 400,
            'keterangan' => 'Bunga tropical dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 13,
            'titlebunga_id' =>3,
            'photo_bunga' => 'h1.7.jpg',
            'nama_bunga' => 'Happiness Bouquet',
            'harga' => 490000,
            'stok' => 400,
            'keterangan' => 'Bunga tropical dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 14,
            'titlebunga_id' =>3,
            'photo_bunga' => 'h1.3.jpg',
            'nama_bunga' => 'Heavens Bouquet',
            'harga' => 190000,
            'stok' => 400,
            'keterangan' => 'Bunga heaven dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 15,
            'titlebunga_id' =>3,
            'photo_bunga' => 'h1.6.jpg',
            'nama_bunga' => 'Rangers',
            'harga' => 280000,
            'stok' => 400,
            'keterangan' => 'Bunga rangers dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 16,
            'titlebunga_id' =>3,
            'photo_bunga' => 'h1.8.jpg',
            'nama_bunga' => 'Pink Plum Bouquet',
            'harga' => 270000,
            'stok' => 400,
            'keterangan' => 'Bunga pink plum dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 17,
            'titlebunga_id' =>3,
            'photo_bunga' => 'h1.9.jpg',
            'nama_bunga' => '100 Roses Bouquet',
            'harga' => 800000,
            'stok' => 400,
            'keterangan' => 'Bunga roses dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 18,
            'titlebunga_id' =>3,
            'photo_bunga' => 'h1.2.jpg',
            'nama_bunga' => 'Double Roses Bouquet',
            'harga' => 200000,
            'stok' => 400,
            'keterangan' => 'Bunga roses dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 19,
            'titlebunga_id' =>4,
            'photo_bunga' => 'h1.10.jpg',
            'nama_bunga' => 'Double-Triple  Roses Bouquet',
            'harga' => 700000,
            'stok' => 400,
            'keterangan' => 'Bunga roses dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 20,
            'titlebunga_id' =>4,
            'photo_bunga' => 'h1.6.jpg',
            'nama_bunga' => 'White Roses Bouquet',
            'harga' => 700000,
            'stok' => 400,
            'keterangan' => 'Bunga white roses dengan tambahan paper wrap dan Card'
        ]);

        
        DB::table('bungas')->insert([
            'id' => 21,
            'titlebunga_id' =>4,
            'photo_bunga' => 'h1.11.jpg',
            'nama_bunga' => 'Tropic Roses Bouquet',
            'harga' => 700000,
            'stok' => 400,
            'keterangan' => 'Bunga tropic white roses dengan tambahan paper wrap dan Card'
        ]);

        
        DB::table('bungas')->insert([
            'id' => 22,
            'titlebunga_id' =>4,
            'photo_bunga' => 'h1.13.jpg',
            'nama_bunga' => 'Tropical Bouquet',
            'harga' => 700000,
            'stok' => 400,
            'keterangan' => 'Bunga tropical dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 23,
            'titlebunga_id' =>4,
            'photo_bunga' => 'h1.12.jpg',
            'nama_bunga' => 'Pinky Bouquet',
            'harga' => 400000,
            'stok' => 400,
            'keterangan' => 'Bunga pinky dengan tambahan paper wrap dan Card'
        ]);

        DB::table('bungas')->insert([
            'id' => 24,
            'titlebunga_id' =>4,
            'photo_bunga' => 'h1.7.jpg',
            'nama_bunga' => 'Sunset Bouquet',
            'harga' => 500000,
            'stok' => 400,
            'keterangan' => 'Bunga sunset dengan tambahan paper wrap dan Card'
        ]);
    }
}

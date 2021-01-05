<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Manager',
            'email' => 'manager@manager.com',
            'password' => bcrypt('manager'),
            'dob' => '1998-01-01',
            'gender' => 'Female',
            'alamat' => 'Gang Senggol 1 No. 23',
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'dob' => '1999-02-20',
            'gender' => 'Male',
            'alamat' => 'Gang Senggol 2 No. 1',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'IamAdmin',
            'email' => 'SuperAdmin@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'User@gmail.com',
            'password' => bcrypt('123456789'),
            'role_id' => 2,

        ]);
    }
}

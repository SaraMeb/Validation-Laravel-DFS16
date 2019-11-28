<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'name' => 'Chiens',
            'classification_id' => 1,
            'lifeExpectancy' => '10 - 13 ans'
        ]);

        DB::table('races')->insert([
            'name' => 'Chats',
            'classification_id' => 1,
            'lifeExpectancy' => '2 – 16 ans'
        ]);

        DB::table('races')->insert([
            'name' => 'Rongeurs',
            'classification_id' => 1,
            'lifeExpectancy' => '1 - 15 ans'
        ]);

        DB::table('races')->insert([
            'name' => 'Poissons',
            'classification_id' => 10,
            'lifeExpectancy' => 'Jusqu\'à 15 - 20 ans'
        ]);

        DB::table('races')->insert([
            'name' => 'Oiseaux',
            'classification_id' => 4,
            'lifeExpectancy' => 'Jusqu\'à 35 ans'
        ]);

        DB::table('races')->insert([
            'name' => 'Reptiles',
            'classification_id' => 2,
            'lifeExpectancy' => '15 - 20 ans'
        ]);
    }
}

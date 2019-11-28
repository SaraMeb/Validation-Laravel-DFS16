<?php

use Illuminate\Database\Seeder;

class ClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifications')->insert([
            'name' => 'Mammifères',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Tétrapodes',

        ]);

        DB::table('classifications')->insert([
            'name' => 'Squamates',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Oiseaux',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Crustacés',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Insectes',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Arachnides',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Céphalopodes',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Bivales',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Actinoptérygiens',
        ]);

        DB::table('classifications')->insert([
            'name' => 'Gastéropodes',
        ]);

    }
}

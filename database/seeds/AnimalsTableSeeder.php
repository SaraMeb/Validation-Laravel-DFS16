<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'name' => 'Tarzan',
            'description' => 'Ce berger allemand est un chien franc et plutôt facile à vivre mais qui demande une éducation ferme et constante. Intelligent, puissant, bon gardien, ce berger allemand saura vous montrer tout son amour et sa loyauté.',
            'sexe' => 'Mâle',
            'age' => '5',
            'weight' => '30',
            'size' => '60',
            'race_id' => 1,
        ]);

        DB::table('animals')->insert([
            'name' => 'Sushi',
            'description' => 'Chat très calme et posé, son flegme participe à lui donner sa propre élégance. Il peut cependant être parfois très curieux et pris d’envie d’aventure ! A vous de lui donner envie d’être joueur et facétieux ! Prenez le temps de jouer avec lui avec une balle, un tunnel, un labyrinthe ...',
            'sexe' => 'Femelle',
            'age' => '2',
            'weight' => '3',
            'size' => '18',
            'race_id' => 2,
        ]);

        DB::table('animals')->insert([
            'name' => 'Lapinou',
            'description' => 'Lapin doux et très calin.',
            'sexe' => 'Mâle',
            'age' => '1',
            'weight' => '1',
            'size' => '21',
            'race_id' => 3,
        ]);


    }
}

<?php

use Illuminate\Database\Seeder;

class Classification_movieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MAYOR 18--> 1
        $classification_movie = new \App\Classification_movie();
        $classification_movie->name = 'M18';
        $classification_movie->save();

        //TODO PUBLICO--> 2
        $classification_movie = new \App\Classification_movie();
        $classification_movie->name = 'TP';
        $classification_movie->save();

        //MAYOR 12-->3
        $classification_movie = new \App\Classification_movie();
        $classification_movie->name = 'M12';
        $classification_movie->save();
    }
}

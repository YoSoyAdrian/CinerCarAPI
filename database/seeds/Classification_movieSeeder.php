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
        //
        $classification_movie = new \App\Classification_movie();

        $classification_movie->name = 'Mayor de 18 años';
        $classification_movie->save();

        $classification_movie = new \App\Classification_movie();

        $classification_movie->name = 'Todo Público';
        $classification_movie->save();
    }
}

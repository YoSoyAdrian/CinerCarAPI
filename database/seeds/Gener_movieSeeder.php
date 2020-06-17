<?php

use Illuminate\Database\Seeder;

class Gener_movieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Comedia';
        $gener_movie->save();

        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Aventura';
        $gener_movie->save();

        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Infantil';
        $gener_movie->save();

        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Animación';
        $gener_movie->save();
    }
}

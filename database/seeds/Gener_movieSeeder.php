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
        //COMEDIA 1
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Comedia';
        $gener_movie->save();

        //AVENTURA 2
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Aventura';
        $gener_movie->save();

        //FANTASIA 3
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Fantasía';
        $gener_movie->save();

        //ANIMACION 4
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Animación';
        $gener_movie->save();

        //ACCION 5
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Acción';
        $gener_movie->save();

        //SUPERHEROE 6
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Superhéroes';
        $gener_movie->save();

        //CIENCIA FICCION 7
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Ciencia ficción';
        $gener_movie->save();

        //DRAMA 8
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Drama';
        $gener_movie->save();

        //FAMILIA 9
        $gener_movie = new \App\Gener_movie();
        $gener_movie->name = 'Familia';
        $gener_movie->save();
    }
}

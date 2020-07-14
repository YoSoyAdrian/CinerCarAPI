<?php

use App\Vote;
use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SE VA A CAMBIAR LA MANERA DE REGISTRAR DE LOS VOTOS Y LOS LIKES

        $vote = new \App\Vote();
        $vote->movie_id = 1;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 1;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 1;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 2;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 2;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 3;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 3;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 3;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 3;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 3;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 4;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 4;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 4;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 4;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 4;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 5;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 3;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 6;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 6;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 6;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 6;
        $vote->save();
    }
}

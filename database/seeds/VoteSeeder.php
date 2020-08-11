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
        $vote->vote_count=50;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 2;
        $vote->vote_count = 20;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 3;
        $vote->vote_count = 10;
        $vote->save();


        $vote = new \App\Vote();
        $vote->movie_id = 4;
        $vote->vote_count = 50;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 5;
        $vote->vote_count = 60;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 6;
        $vote->vote_count = 35;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 8;
        $vote->vote_count = 12;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 7;
        $vote->vote_count = 29;
        $vote->save();

        $vote = new \App\Vote();
        $vote->movie_id = 9;
        $vote->vote_count = 33;
        $vote->save();

    }
}

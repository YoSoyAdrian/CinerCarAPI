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
        //
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
    }
}

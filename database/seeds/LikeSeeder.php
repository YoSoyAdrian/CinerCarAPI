<?php

use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $like = new \App\Like();
        $like->product_id = 3;
        $like->like_count = 20;
        $like->save();



        $like = new \App\Like();
        $like->product_id = 2;
        $like->like_count = 70;
        $like->save();



        $like = new \App\Like();
        $like->product_id = 4;
        $like->like_count = 33;
        $like->save();


        $like = new \App\Like();
        $like->product_id = 1;
        $like->like_count = 10;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 5;
        $like->like_count = 30;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 7;
        $like->like_count = 100;
        $like->save();
    }
}

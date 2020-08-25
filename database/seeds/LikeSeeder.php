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
        $like->product_id = 1;
        $like->like_count = 20;
        $like->save();



        $like = new \App\Like();
        $like->product_id = 2;
        $like->like_count = 70;
        $like->save();



        $like = new \App\Like();
        $like->product_id = 3;
        $like->like_count = 33;
        $like->save();


        $like = new \App\Like();
        $like->product_id = 4;
        $like->like_count = 10;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 5;
        $like->like_count = 30;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 6;
        $like->like_count = 5;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 7;
        $like->like_count = 10;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 8;
        $like->like_count = 42;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 9;
        $like->like_count = 21;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 10;
        $like->like_count = 29;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 11;
        $like->like_count = 50;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 12;
        $like->like_count = 15;
        $like->save();


        $like = new \App\Like();
        $like->product_id = 13;
        $like->like_count = 11;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 14;
        $like->like_count = 20;
        $like->save();

        $like = new \App\Like();
        $like->product_id = 15;
        $like->like_count = 30;
        $like->save();
    }
}

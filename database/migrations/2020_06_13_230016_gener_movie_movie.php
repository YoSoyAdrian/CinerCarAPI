<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GenerMovieMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gener_movie_movie', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gener_movie_id');
            $table->unsignedInteger('movie_id');
            $table->timestamps();
            $table->foreign('gener_movie_id')->references('id')->on('gener_movies');
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table(
            'gener_movie_movie',
            function (Blueprint $table) {
                $table->dropForeign('gener_movie_movie_movie_id_foreing');
                $table->dropForeign('gener_movie_movie_gener_movie_id_foreing');
            }
        );
        Schema::dropIfExists('gener_movie_movie');
    }
}

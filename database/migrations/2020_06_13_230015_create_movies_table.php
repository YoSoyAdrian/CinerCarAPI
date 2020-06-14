<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('sysnopsis');
            $table->boolean('active')->default(true);
            $table->unsignedInteger('gener_movie_id');
            $table->unsignedInteger('classification_movie_id');
            $table->timestamps();
            $table->foreign('gener_movie_id')->references('id')->on('gener_movies');
            $table->foreign('classification_movie_id')->references('id')->on('classification_movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}

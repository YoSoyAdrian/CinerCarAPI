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
            $table->string('name')->nullable();
            $table->text('synopsis')->nullable();
            $table->date('premiere_date')->nullable();
            $table->string('duration')->nullable();
            $table->string('image')->nullable();
            $table->string('banner')->nullable();
            $table->boolean('active')->default(true)->nullable();
            $table->unsignedInteger('classification_movie_id')->nullable();
            $table->timestamps();
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
        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign('movies_classification_movie_id_foreign');
        });

        Schema::dropIfExists('movies');
    }
}

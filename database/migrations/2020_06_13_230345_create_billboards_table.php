<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billboards', function (Blueprint $table) {
            $table->increments('id');

            $table->date('current_date');
            $table->boolean('available')->default(true);
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('movie_id');
            $table->integer('number_space');
            $table->time('hour');
            $table->boolean('visible');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations');
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
        Schema::table('billboards', function (Blueprint $table) {
            $table->dropForeign('billboards_location_id_foreign');
            $table->dropForeign('billboards_movie_id_foreign');
        });
        Schema::dropIfExists('billboards');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('iva');
            $table->decimal('total');
            $table->unsignedInteger('billboard_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('billboard_id')->references('id')->on('billboards');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign('reservations_billboard_id_foreign');
            $table->dropForeign('reservations_user_id_foreign');
        });
        Schema::dropIfExists('reservations');
    }
}

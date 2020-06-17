<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('reservation_id');

            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('reservation_id')->references('id')->on('reservations');
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
            'product_reservation',
            function (Blueprint $table) {
                $table->dropForeign('product_reservation_product_id_foreing');
                $table->dropForeign('product_reservation_reservation_id_foreing');
            }
        );
        Schema::dropIfExists('product_reservation');
    }
}

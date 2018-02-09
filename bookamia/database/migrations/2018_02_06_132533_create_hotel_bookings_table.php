<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_bookings', function (Blueprint $table) {
            $table->increments('bookingId')->unique();
            $table->integer('customerID');
            $table->date('checkInDate');
            $table->date('checkOutDate');
            $table->integer('numberOfAldult');
            $table->integer('numberOfChildren');
            $table->integer('numberofRooms');
            $table->integer('roomType');
            $table->decimal('standardServiceRate');
            $table->string('bookingStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_bookings');
    }
}

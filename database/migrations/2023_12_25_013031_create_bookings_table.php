<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer("customer_id");
            $table->integer("room_id");
            $table->date("check_in")->nullable();
            $table->date("check_out")->nullable();
            $table->date("start_date");
            $table->date("end_date");
            $table->integer("total_night");
            $table->float("total_price");
            $table->integer("total_person");
            $table->integer("paid_status");
            $table->integer("status");
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
        Schema::dropIfExists('bookings');
    }
}

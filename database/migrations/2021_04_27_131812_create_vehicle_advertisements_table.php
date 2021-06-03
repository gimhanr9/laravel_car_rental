<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_advertisements', function (Blueprint $table) {
            $table->id();

            $table->text('title');
            $table->text('model');
            $table->text('brand');
            $table->text('description');
            $table->text('cost');
            $table->text('year');
            $table->text('transmission');
            $table->text('fuel');
            $table->text('body');
            $table->text('engine_capacity');



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
        Schema::dropIfExists('vehicle_advertisements');
    }
}

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
            $table->integer('id',true);

            $table->string('title',200);
            $table->string('model',100);
            $table->string('brand',100);
            $table->string('description',2000);
            $table->string('cost',100);
            $table->string('year',100);
            $table->string('transmission',100);
            $table->string('fuel',100);
            $table->string('body',100);
            $table->string('engine_capacity',100);
            $table->string('main_image',1000);
            $table->string('rented');

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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->integer('id',true);
            $table->string('name',100);
            $table->string('licenseNo',100);
            $table->string('phone',100);
            $table->string('dob',100);
            $table->integer('carId')->nullable();
            $table->timestamps();

            $table->foreign('carId')->references('id')->on('vehicle_advertisements')->onDelete('set null');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->integer('id',true);
            $table->integer('customerId');
            $table->integer('vehicleId');
            $table->string('customerName',100);
            $table->string('vehicelBrand',100);
            $table->integer('distance');
            $table->string('price',100);
            $table->string('dateTaken',100);
            $table->string('dueDate',100);
            $table->string('approved',100);

            $table->timestamps();

            $table->foreign('customerId')->references('id')->on('users');
            $table->foreign('vehicleId')->references('id')->on('vehicle_advertisements');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}

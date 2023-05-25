<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->string('Agency') ;
            $table->string('Departure_station');
            $table->string('Arrival_station');
            $table->string('Departure_time');
            $table->string('Arrival_time');
            $table->smallInteger('Train_Code') ;
            $table->smallInteger('Number_of_carriages');
            $table->boolean('In_time') ;
            $table->boolean('Deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
        
    }
};

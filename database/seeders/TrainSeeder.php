<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train->string('Agency') ;
            $train->string('Departure_station');
            $train->string('Arrival_station');
            $train->string('Departure_time');
            $train->string('Arrival_time');
            $train->tinyInteger('Train_Code') ;
            $train->tinyInteger('Number_of_carriages');
            $train->boolean('In_time') ;
            $train->boolean('Deleted');
    }
}

<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train;
            $train->Agency = $faker->randomElement(['Freccia Rossa', 'Regionale', 'Italo', 'Intercity', 'Freccia3000']);
            $train->Departure_station = $faker->city();
            $train->Arrival_station = $faker->city();
            $train->Departure_time = $faker->time();
            $train->Arrival_time = $faker->time();
            $train->Train_Code = $faker->randomNumber(3 , true);
            $train->Number_of_carriages = $faker->randomNumber(2, false);
            $train->In_time = $faker->boolean();
            $train->Deleted = $faker->boolean();
            $train->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Flight;
use App\Airport;


class FlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $airports = Airport::all();

       foreach ($airports as $airport) {
            for ($i = 0; $i < 6; $i++) {
                $new_rest = new Flight();
                $new_rest->airport_id = $airport->id;
                $new_rest->code_departure = $faker->numerify('dep-####');
                $new_rest->code_arrival = $faker->numerify('arr-####');
                $new_rest->stopover = rand(0,2);
                $new_rest->price = $faker->randomFloat(2, 40, 100);;

                $new_rest->save();
            };
       }

    }
}

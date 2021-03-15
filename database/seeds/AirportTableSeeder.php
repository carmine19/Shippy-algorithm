<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Flight;
use App\Airport;


class AirportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 2; $i++) {
                $new_rest = new Airport();
                $new_rest->name = $faker->company();
                $new_rest->code = $faker->numerify('air-####');
                $new_rest->latitude = $faker->latitude($min = -90, $max = 90);
                $new_rest->longitude = $faker->longitude($min = -180, $max = 180);
                $new_rest->save();
            };

    }
}

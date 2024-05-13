<?php

namespace Database\Seeders;

//importo faker generator
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /* $trains=config('db.trains');
        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->departure_platform = $train['departure_platform'];
            $newTrain->arrival_platform = $train['arrival_platform'];
            $newTrain->type = $train['type'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->wagons_number = $train['wagons_number'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save();
        } */

        for ($i=0; $i < 5; $i++) { 
            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Trenitalia', 'Eurostar']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-1 day', '+2 week');
            $train->arrival_time = $faker->dateTimeBetween('-1 day', '+2 week');
            $train->departure_platform = 'platform' . ' ' . $faker->numberBetween(1,15);
            $train->arrival_platform = 'platform' . ' ' . $faker->numberBetween(1,15);
            $train->type = $faker->randomElement(['Frecciarossa', 'Frecciargento', 'Frecciabianca', 'Regionale veloce']);
            $train->train_code = $faker->bothify('???###');
            $train->wagons_number = $faker->numberBetween(1, 10);
            $train->in_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}

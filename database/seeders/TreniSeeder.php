<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\TreniModel;

class TreniSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            TreniModel::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->dateTimeBetween('now', '+2 hours'),
                'arrival_time' => $faker->dateTimeBetween('+3 hours', '+4 hours'),
                'train_code' => $faker->bothify('???-####'),
                'carriages_number' => $faker->numberBetween(5,15),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
            ]);
        }
    }
}
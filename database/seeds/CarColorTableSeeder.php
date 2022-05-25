<?php

use Illuminate\Database\Seeder;
use App\Car;
use Faker\Generator as Faker;
use App\Color;
class CarColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $color_id = Color::pluck('id')->toArray();
        $cars = Car::all();

        foreach ($cars as $car) {
            $car->colors()->sync($faker->randomElements($color_id, rand(1, 5)));
        }

    }
}

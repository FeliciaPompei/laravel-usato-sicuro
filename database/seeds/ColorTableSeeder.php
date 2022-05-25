<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Color;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15 ; $i++) {
            $newColor = new Color();
            $newColor->color = $faker->unique()->hexColor();
            $newColor->save();
        };
    }
}

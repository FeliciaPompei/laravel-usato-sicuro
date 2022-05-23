<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Brand;
class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $brandNames = [
            [
                'name' => 'renault',
                'nationality' => 'France'
            ],
            [
                'name' => 'citroen',
                'nationality' => 'France'
            ],
            [
                'name' => 'ford',
                'nationality' => 'Italy'
            ],
            [
                'name' => 'maserati',
                'nationality' => 'Italy'
            ],
            [
                'name' => 'hummer',
                'nationality' => 'America'
            ]
        ];
        foreach($brandNames as $brand) {
            $newBrand = new Brand;
            $newBrand->name = $brand['name'];
            $newBrand->fondation_date = $faker->date();
            $newBrand->nationality = $brand['nationality'];
            $newBrand->save();
        }
    }
}

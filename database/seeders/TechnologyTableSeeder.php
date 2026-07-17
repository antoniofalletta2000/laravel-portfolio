<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $techologies = ["React", "Express", "MySQL"];
        foreach ($techologies as $technology) {

            $newTechnology = new Technology();

            $newTechnology->nome = $technology;
            $newTechnology->colore = $faker->hexColor();

            $newTechnology->save();
        }
    }
}

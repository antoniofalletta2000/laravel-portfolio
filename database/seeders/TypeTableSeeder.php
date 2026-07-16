<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ["e-commerce","applicazione", "cinematografia"];

        foreach($types as $type){
            $newType = new Type();
            $newType->nome = $type;
            $newType->save();

        }
    }
}

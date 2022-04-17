<?php

namespace Database\Seeders;

use App\Models\Movement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $One = Movement::create(array(
            'name' => "Bulbasaur",
            'number' => "001",
            'description' => "Este Pokémon nace con una semilla en el lomo, que brota con el paso del tiempo.",
        ));
        $One->movement_types()->attach([12]);
        $One->movement_types()->attach([17]);

        $One->movement_classes()->attach([3]);
    }
}

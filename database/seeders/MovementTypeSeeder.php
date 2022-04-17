<?php

namespace Database\Seeders;

use App\Models\MovementType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovementType::create(array(
            'name' => "Acero",
        ));

        MovementType::create(array(
            'name' => "Agua",
        ));

        MovementType::create(array(
            'name' => "Bicho",
        ));

        MovementType::create(array(
            'name' => "Dragón",
        ));

        MovementType::create(array(
            'name' => "Eléctrico",
        ));

        MovementType::create(array(
            'name' => "Fantasma",
        ));

        MovementType::create(array(
            'name' => "Fuego",
        ));

        MovementType::create(array(
            'name' => "Hada",
        ));

        MovementType::create(array(
            'name' => "Hielo",
        ));

        MovementType::create(array(
            'name' => "Lucha",
        ));

        MovementType::create(array(
            'name' => "Normal",
        ));

        MovementType::create(array(
            'name' => "Planta",
        ));

        MovementType::create(array(
            'name' => "Psíquico",
        ));

        MovementType::create(array(
            'name' => "Roca",
        ));

        MovementType::create(array(
            'name' => "Siniestro",
        ));

        MovementType::create(array(
            'name' => "Tierra",
        ));

        MovementType::create(array(
            'name' => "Veneno",
        ));

        MovementType::create(array(
            'name' => "Volador",
        ));
    }
}

<?php

namespace Database\Seeders;

use App\Models\Weakness;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaknessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Weakness::create(array(
            'name' => "Acero",
        ));

        Weakness::create(array(
            'name' => "Agua",
        ));

        Weakness::create(array(
            'name' => "Bicho",
        ));

        Weakness::create(array(
            'name' => "Dragón",
        ));

        Weakness::create(array(
            'name' => "Eléctrico",
        ));

        Weakness::create(array(
            'name' => "Fantasma",
        ));

        Weakness::create(array(
            'name' => "Fuego",
        ));

        Weakness::create(array(
            'name' => "Hada",
        ));

        Weakness::create(array(
            'name' => "Hielo",
        ));

        Weakness::create(array(
            'name' => "Lucha",
        ));

        Weakness::create(array(
            'name' => "Normal",
        ));

        Weakness::create(array(
            'name' => "Planta",
        ));

        Weakness::create(array(
            'name' => "Psíquico",
        ));

        Weakness::create(array(
            'name' => "Roca",
        ));

        Weakness::create(array(
            'name' => "Siniestro",
        ));

        Weakness::create(array(
            'name' => "Tierra",
        ));

        Weakness::create(array(
            'name' => "Veneno",
        ));

        Weakness::create(array(
            'name' => "Volador",
        ));
    }
}

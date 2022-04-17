<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(array(
            'name' => "Acero",
        ));

        Type::create(array(
            'name' => "Agua",
        ));

        Type::create(array(
            'name' => "Bicho",
        ));

        Type::create(array(
            'name' => "Dragón",
        ));

        Type::create(array(
            'name' => "Eléctrico",
        ));

        Type::create(array(
            'name' => "Fantasma",
        ));

        Type::create(array(
            'name' => "Fuego",
        ));

        Type::create(array(
            'name' => "Hada",
        ));

        Type::create(array(
            'name' => "Hielo",
        ));

        Type::create(array(
            'name' => "Lucha",
        ));

        Type::create(array(
            'name' => "Normal",
        ));

        Type::create(array(
            'name' => "Planta",
        ));

        Type::create(array(
            'name' => "Psíquico",
        ));

        Type::create(array(
            'name' => "Roca",
        ));

        Type::create(array(
            'name' => "Siniestro",
        ));

        Type::create(array(
            'name' => "Tierra",
        ));

        Type::create(array(
            'name' => "Veneno",
        ));

        Type::create(array(
            'name' => "Volador",
        ));
    }
}

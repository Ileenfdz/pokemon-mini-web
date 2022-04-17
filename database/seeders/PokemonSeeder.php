<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 001-003
        $bulbasaur = Pokemon::create(array(
            'name' => "Bulbasaur",
            'number' => "001",
            'description' => "Este Pokémon nace con una semilla en el lomo, que brota con el paso del tiempo.",
        ));
        $bulbasaur->types()->attach([12]);
        $bulbasaur->types()->attach([17]);

        $bulbasaur->weaknesses()->attach([7]);
        $bulbasaur->weaknesses()->attach([13]);
        $bulbasaur->weaknesses()->attach([18]);
        $bulbasaur->weaknesses()->attach([9]);

        // $bulbasaur->abilities()->attach([3]);

        // $bulbasaur->poke_locations()->attach([3]);

        $ivysaur = Pokemon::create(array(
            'name' => "Ivysaur",
            'number' => "002",
            'description' => "Cuando le crece bastante el bulbo del lomo, pierde la capacidad de erguirse sobre las patas traseras.",
        ));
        $ivysaur->types()->attach([12]);
        $ivysaur->types()->attach([17]);

        $ivysaur->weaknesses()->attach([7]);
        $ivysaur->weaknesses()->attach([13]);
        $ivysaur->weaknesses()->attach([18]);
        $ivysaur->weaknesses()->attach([9]);

        // $ivysaur->abilities()->attach([3]);

        // $ivysaur->poke_locations()->attach([3]);

        $venusaur = Pokemon::create(array(
            'name' => "Venusaur",
            'number' => "003",
            'description' => "La planta florece cuando absorbe energía solar, lo cual le obliga a buscar siempre la luz del sol.",
        ));
        $venusaur->types()->attach([12]);
        $venusaur->types()->attach([17]);

        $venusaur->weaknesses()->attach([7]);
        $venusaur->weaknesses()->attach([13]);
        $venusaur->weaknesses()->attach([18]);
        $venusaur->weaknesses()->attach([9]);

        // $venusaur->abilities()->attach([3]);

        // $venusaur->poke_locations()->attach([3]);

        // 004-009
        $charmander = Pokemon::create(array(
            'name' => "Charmander",
            'number' => "004",
            'description' => "Prefiere las cosas calientes. Dicen que cuando llueve le sale vapor de la punta de la cola.", 
        ));
        $charmander->types()->attach([7]);

        $charmander->weaknesses()->attach([2]);
        $charmander->weaknesses()->attach([16]);
        $charmander->weaknesses()->attach([14]);

        // $charmander->abilities()->attach([2]);

        // $charmander->poke_locations()->attach([2]);

        // 007-006
        $squirtle = Pokemon::create(array(
            'name' => "Squirtle",
            'number' => "007",
            'description' => "Cuando retrae su largo cuello en el caparazón, dispara agua a una presión increíble.",
        ));
        $squirtle->types()->attach([2]);

        $squirtle->weaknesses()->attach([12]);
        $squirtle->weaknesses()->attach([5]);

        // $squirtle->abilities()->attach([1]);

        // $squirtle->poke_locations()->attach([1]);

    }
}

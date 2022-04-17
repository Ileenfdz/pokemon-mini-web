<?php

namespace Database\Seeders;

use App\Models\PokeLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokeLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PokeLocation::create(array(
            'name' => "Kanto",
        ));

        PokeLocation::create(array(
            'name' => "Islas Sete",
        ));

        PokeLocation::create(array(
            'name' => "Johto",
        ));

        PokeLocation::create(array(
            'name' => "Hoenn",
        ));

        PokeLocation::create(array(
            'name' => "Sinnoh",
        ));

        PokeLocation::create(array(
            'name' => "Hisui",
        ));

        PokeLocation::create(array(
            'name' => "Teselia",
        ));

        PokeLocation::create(array(
            'name' => "Kalos",
        ));

        PokeLocation::create(array(
            'name' => "Alola",
        ));

        PokeLocation::create(array(
            'name' => "Galar",
        ));
    }
}

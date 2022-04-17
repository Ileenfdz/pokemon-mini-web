<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AbilitySeeder::class,
            // MovementTypeSeeder::class,
            // MovementClassSeeder::class,
            // MovementSeeder::class,
            PokeLocationSeeder::class,
            TypeSeeder::class,
            WeaknessSeeder::class,
            PokemonSeeder::class,
        ]);
    }
}

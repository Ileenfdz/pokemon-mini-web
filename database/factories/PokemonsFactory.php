<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemons>
 */
class PokemonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'number' => $this->faker->numberBetween(000, 010),
            'description' => $this->faker->description(),
            'legendary' => $this->faker->boolean(),
        ];
    }
}

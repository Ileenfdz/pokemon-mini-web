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
            'type' => $this->faker->randomElement(['psíquico', 'eléctrico', 'hada', 'dragón', 'agua', 'fuego', 'planta', 'siniestro', 'fantasma', 'veneno', 'volador', 'hielo', 'lucha', 'tierra', 'bicho', 'acero', 'normal', 'roca']),
            'number' => $this->faker->numberBetween(000, 800),
            // Los huevos no tienen tipo
        ];
    }
}

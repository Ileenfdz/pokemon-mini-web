<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weaknesses>
 */
class WeaknessesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'weakness' => $this->faker->randomElement(['Normal', 'Fuego', 'Agua', 'Planta', 'Eléctrico', 'Hielo', 'Lucha', 'Veneno', 'Tierra', 'Volador', 'Hada', 'Acero', 'Dragon', 'Fantasma', 'Roca', 'Bicho', 'Psíquico', 'Siniestro']),
        ];
    }
}

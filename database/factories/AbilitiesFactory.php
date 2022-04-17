<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abilities>
 */
class AbilitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->description(),
            'normal ability' => $this->faker->randomElement(['Cacofonía', 'Hedor', 'Llovizna', 'Impulso', 'Armadura batalla', 'Robustez', 'Humedad', 'Flexibilidad', 'Velo arena', 'Electricidad estática', 'Absorbe electricidad', 'Absorbe agua', 'Despiste', 'Aclimatación', 'Ojo compuesto', 'Insomnio', 'Cambio color', 'Inmunidad', 'Absorbe fuego', 'Polvo escudo', 'Ritmo propio', 'Ventosas', 'Intimidación', 'Sombra trampa', 'Piel tosca', 'Superguarda', 'Levitación', 'Efecto espora', 'Sincronía', 'Cuerpo duro', 'Cura natural', 'Pararrayos', 'Dicha', 'Nado rápido', 'Clorofila', 'Iluminación', 'Rastro', 'Potencia', 'Punto tóxico', 'Foco interno', 'Escudo magma', 'Velo agua', 'Imán', 'Insonorizar', 'Cura lluvia', 'Chorro arena', 'Presión', 'Sebo', 'Madrugar', 'Cuerpo llama', 'Fuga', 'Vista lince', 'Corte fuerte', 'Recogida', 'Ausente', 'Entusiasmo', 'Gran encanto', 'Más', 'Menos', 'Predicción', 'Viscosidad', 'Mudar', 'Agallas', 'Escama especial', 'Lodo líquido', 'Espesura', 'Mar llamas', 'Torrente', 'Enjambre', 'Cabeza roca', 'Sequía', 'Trampa arena', 'Espíritu vital', 'Humo blanco', 'Energía pura', 'Caparazón', 'Bucle aire', 'Tumbos', 'Electromotor', 'Rivalidad', 'Impasible', 'Manto níveo', 'Gula', 'Irascible', 'Liviano', 'Ignífugo', 'Simple', 'Piel seca', 'Descarga', 'Puño férreo', 'Antídoto', 'Adaptable', 'Encadenado', 'Hidratación', 'Poder solar', 'Pies rápidos', 'Normalidad', 'Francotirador', 'Muro mágico', 'Indefenso', 'Rezagado', 'Experto', 'Defensa hoja', 'Zoquete', 'Rompemoldes', 'Afortunado', 'Detonación', 'Anticipación', 'Alerta', 'Ignorante', 'Cromolente', 'Filtro', 'Inicio lento', 'Intrépido', 'Colector', 'Gélido', 'Roca sólida', 'Nevada', 'Recogemiel', 'Cacheo', 'Audaz', 'Multitipo', 'Don floral', 'Mal sueño', 'Hurto', 'Potencia bruta', 'Respondón', 'Nerviosismo', 'Competitivo', 'Flaqueza', 'Cuerpo maldito', 'Alma cura', 'Compiescolta', 'Armadura frágil', 'Metal pesado', 'Metal liviano', 'Multiescamas', 'Ímpetu tóxico', 'ímpetu ardiente', 'Cosecha', 'Telepatía', 'Veleta', 'Funda', 'Toque tóxico', 'Regeneración', 'Sacapecho', 'Ímpetu arena', 'Piel milagro', 'Cálculo final', 'Ilusión', 'Impostor', 'Allanamiento', 'Momia', 'Autoestima', 'Justiciero', 'Cobardía', 'Espejo mágico', 'Herbívoro', 'Bromista', 'Poder arena', 'Punta acero', 'Modo Daruma', 'Tinovictoria', 'Turbollama', 'Terravoltaje', 'Velo aroma', 'Velo flor', 'Carrillo', 'Mutatipo', 'Pelaje recio', 'Prestidigitador', 'Antibalas', 'Tenacidad', 'Mandíbula fuerte', 'Piel helada', 'Velo dulce', 'Cambio táctico', 'Alas vendaval', 'Megadisparador', 'Manto frondoso', 'Simbiosis', 'Garra dura', 'Piel feérica', 'Baba', 'Piel celeste', 'Amor filial', 'Aura oscura', 'Aura feérica', 'Rompeaura', 'Mar del albor', 'Tierra del ocaso', 'Ráfaga delta', 'Firmeza', 'Huida', 'Retirada', 'Hidrorrefuerzo', 'Ensañamiento', 'Escudo limitado', 'Vigilante', 'Pompa', 'Acero templado', 'Cólera', 'Quitanieves', 'Remoto', 'Voz fluida', 'Primer auxilio', 'Piel eléctrica', 'Cola surf', 'Banco', 'Disfraz', 'Fuerte afecto', 'Agrupamiento', 'Corrosión', 'Letargo perenne', 'Regia presencia', 'Revés', 'Pareja de baile', 'Batería', 'Peluche', 'Cuerpo vívido', 'Coránima', 'Rizos rebeldes', 'Receptor', 'Reacción química', 'Ultraimpulso', 'Sistema alfa', 'Electrogénesis', 'Psicogénesis', 'Nebulogénesis', 'Herbogénesis', 'Guardia metálica', 'Guardia espectro', 'Armadura prisma', 'Fuerza cerebral', 'Espada indómita', 'Escudo recio', 'Líbero', 'Recogebolas', 'Pelusa', 'Hélice caudal', 'Coraza reflejo', 'Tragamisil', 'Acérrimo', 'Combustible', 'Punk rock', 'Expulsarena', 'Escama de hielo', 'Maduración', 'Cara de hielo', 'Fuente energía', 'Mimetismo', 'Antibarrera', 'Alma acerada', 'Cuerpo mortal', 'Alma errante', 'Monotema', 'Gas reactivo', 'Velo pastel', 'Mutapetito', 'Mano rápida', 'Puño invisible', 'Medicina extraña', 'Transistor', 'Mandíbula dragón', 'Relincho blanco', 'Relincho negro', 'Unidad ecuestre', 'Unidad ecuestre']),
            // 'special ability' => $this->faker->randomElement([]),
        ];
    }
}

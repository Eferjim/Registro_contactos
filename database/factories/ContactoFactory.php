<?php

namespace Database\Factories;

use App\Models\Contacto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contacto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contratar' => $this->faker->boolean(),
            'practicas' => $this->faker->boolean(),
            'fct' => $this->faker->boolean(),
            'formacion_d' => $this->faker->boolean(),
            'dam' => $this->faker->boolean(),
            'daw' => $this->faker->boolean(),
            'asir' => $this->faker->boolean(),
            'ifo' => $this->faker->boolean(),
            'fase' => $this->faker->numberBetween($min = 1, $max = 4),
            'descripcion' => $this->faker->sentence()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Medio;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre' => $this->faker->randomElement([
                'email',
                'llamada'])
        ];
    }
}

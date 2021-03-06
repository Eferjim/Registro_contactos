<?php

namespace Database\Factories;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Factories\Factory;

class TareaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tarea::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre' => ([
                'Administración de Sistemas',
                'Atención a users',
                'Desarrollo Web',
                'Desarrollo de Aplicaciones',
                'Informática de oficina',
                'Redes',
                'Programación',
                'Desarrollo de aplicaciones móviles',
                'Montaje de equipos'])

        ];
    }
}

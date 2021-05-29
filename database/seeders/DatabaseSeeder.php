<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;
use App\Models\Contacto;
use App\Models\Medio;
use App\Models\Tarea;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Contacto::factory(5)->create();
        Empresa::factory(3)->create();
        Medio::factory(2)->create();
        Tarea::factory(9)->create()->unique();
        User::factory(5)->create();

    }
}

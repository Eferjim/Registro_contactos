<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medio;

class MedioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medio = new Medio();

        $medio->id;
        $medio->nombre;

    }
}

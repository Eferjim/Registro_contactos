<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacto = new Contacto();

        $contacto->id;
        $contacto->contratar;
        $contacto->practicas;
        $contacto->fct;
        $contacto->formacion_d;
        $contacto->dam;
        $contacto->daw;
        $contacto->asir;
        $contacto->ifo;
        $contacto->fase;
        $contacto->descripcion;

    }
}

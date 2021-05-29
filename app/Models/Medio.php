<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medio extends Model
{
    use HasFactory;

    //Relación contacto
    public function contactos() {

        return $this->hasMany('App\Models\Contacto');

    }
}

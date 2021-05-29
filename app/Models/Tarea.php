<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    //Relación contacto
    public function contactos(){

        return $this->belongsToMany('App\Models\Contacto');

    }
}

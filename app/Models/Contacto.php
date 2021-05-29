<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    //Relación empresa
    public function empresa(){

        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    //Relación medio
    public function medio(){

        return $this->belongsTo(Medio::class, 'id_medio');
    }

    //Relación user
    public function users(){

        return $this->belongsToMany(User::class, 'contacto_user', 'id_contacto', 'id_user');

    }

    //Relación tarea
    public function tareas(){

        return $this->belongsToMany(Tarea::class, 'contacto_tarea', 'id_contacto', 'id_tarea');

    }

}

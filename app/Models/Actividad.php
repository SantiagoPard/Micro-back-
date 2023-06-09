<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = "actividades";

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class,"codigo");
    }
    
}
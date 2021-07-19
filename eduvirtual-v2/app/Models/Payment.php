<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    //relacion uno a muchos
    const Inscripcion=1;//Boton inscripcion
    const PreInscripcion=2;// Boton Pre-Inscripcion


    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}

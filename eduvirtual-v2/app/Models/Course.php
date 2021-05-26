<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const Borrador=1;// no visible falta completar datos
    const Revision=2;//no visible falta aprobacion
    const Publicado=3;//estan visible en la pagina
    const Activo=4;//habilitado inscripcion o pre-inscripcion
    const Proximamente=5;//visible sin inscripcion o pre-inscripcion con fecha proxima abrir
    const Finalizado=6;//visible
    const Baja=7;//no visible
    const Inscripcion=8;//Boton inscripcion
    const PreInscripcion=9;// Boton Pre-Inscripcion

/***query scopes********************* */
public function scopeCategory($query,$category_id){

    if($category_id){
        return $query->where('category_id',$category_id);
    }
}
public function scopeType($query,$type_id){

    if($type_id){
        return $query->where('type_id',$type_id);
    }
}
public function getRouteKeyName(){

    return "slug";//url de los cursos
}

    public function teacher(){
        return $this->belongsToMany('App\Models\Teacher');
    }
}

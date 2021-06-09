<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
    /**  public function getRouteKeyName(){return 'slug';} **/
}

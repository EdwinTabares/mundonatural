<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
   	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imagen', 'titulo','descripcion'
    ];
     
    //CONSULTA USUARIOS POR TITULO
    public function scopeSearch($query, $titulo){
    	
    	return $query->where('titulo','LIKE',"%$titulo%");
    }
}

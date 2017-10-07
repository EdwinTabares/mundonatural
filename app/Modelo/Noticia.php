<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
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

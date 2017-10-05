<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $fillable = [
      'nombre','email','telefono','mensaje'
      ];

    //CONSULTA CONTACTOS POR NOMBRE
      public function scopeSearch($query, $nombre){
      	
      	return $query->where('nombre','LIKE',"%$nombre%");
      }
    }

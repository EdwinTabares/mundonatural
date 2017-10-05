<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table="products";
	protected $fillable = ['nombre', 'imagen', 'descripcion','valor'];
}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

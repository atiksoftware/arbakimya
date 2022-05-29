<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $attributes = [
		'name' => '', // [type:string, required:true]
		'color' => null, // [type:string, nullable, def:#000]
		'icon' => null, // [type:string, nullable, def:null]
	];

	protected $casts = [];

	protected $appends = [];

	protected $guarded = [];

	protected $hidden = [];
}

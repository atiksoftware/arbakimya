<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $attributes = [
		'name' => '', // [type: string, required:true]
		'category_id' => null, // [type: integer, model: Category, nullable]

		'buy_price' => null, // [type: float, nullable]
		'sell_price' => null, // [type: float, nullable]

		'pallet_size' => null, // [type: float, nullable]
		'pallet_weight' => null, // [type: float, nullable]

		'quantity' => null, // [type: float, nullable]
		'weight' => null, // [type: float, nullable]
	];

	protected $casts = [];

	protected $appends = [];

	protected $guarded = [];

	protected $hidden = [];
}

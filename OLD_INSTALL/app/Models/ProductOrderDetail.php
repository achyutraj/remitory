<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrderDetail extends Model
{
	use HasFactory;

	protected $guarded = ['id'];
	protected $casts = [
		'attributes_id' => 'object'
	];
	protected $appends = ['attr'];

	public function product()
	{
		return $this->belongsTo(StoreProduct::class, 'product_id');
	}

	public function getAttrAttribute()
	{
		return ProductAttrList::with('attrName')->whereIn('id', $this->attributes_id)->get();
	}
}

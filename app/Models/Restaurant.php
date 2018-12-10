<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

	protected $fillable = [
		'name',
		'telephone',
		'address',
		'city',
		'schedule_day',
		'schedule_time',
		'description',
		'img_path',		
	];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}

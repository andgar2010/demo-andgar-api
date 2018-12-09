<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = [
		'name',
		// 'by_created_user_id'
	];

    public function restaurants()
    {
    	return $this->hasMany(Restaurant::class);
    }
}

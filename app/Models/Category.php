<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function restaurants()
    {
    	return $this->hasMany(Restaurant::class);
    }
}

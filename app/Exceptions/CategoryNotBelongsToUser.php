<?php

namespace App\Exceptions;

use Exception;

class CategoryNotBelongsToUser extends Exception
{
    public function render()
    {
    	return ['errors'=> 'Category not Belongs to User'];
    }
}

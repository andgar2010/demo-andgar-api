<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'by_user_id' => function(){
        	return App\User::all()->random();
        } ,
    ];
});

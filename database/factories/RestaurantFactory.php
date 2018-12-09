<?php

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(App\Models\Restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'category_id'=> function(){
            return Category::all()->random();
        },
        'telephone' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'schedule_day' => $faker->dayOfWeek() .' - '. $faker->dayOfWeek(),
        'schedule_time' => $faker->time($format = 'H:i') . ' - ' . $faker->time($format = 'H:i'),
        'description' => $faker->paragraph,
        'img_path' => $faker->imageUrl($width = 640, $height = 480),
    ];
});

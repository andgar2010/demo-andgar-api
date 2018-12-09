<?php

namespace App\Http\Resources\Restaurant;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'telephone' =>  $this->telephone,
            'address' =>  $this->address,
            'city' =>  $this->city,
            'schedule_day' =>  $this->schedule_day,
            'schedule_time' =>  $this->schedule_time,
            'description' =>  $this->description,
            'img_path' =>  $this->img_path,
        ];
    }
}

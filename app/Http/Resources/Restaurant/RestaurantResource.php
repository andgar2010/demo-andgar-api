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
            'id' => $this->id,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'telephone' => $this->telephone == '' ? 'No hay dato de telefono' : $this->telephone,
            'localization' => [
                'address' => $this->address == '' ? 'No hay dato de direccion' : $this->address,
                'city' => $this->city == '' ? 'No hay dato de ciudad' : $this->city,
            ],
            'schedule' => [
                'day' => $this->schedule_day == '' ? 'No hay dato de dias de servicio' : $this->schedule_day,
                'time' => $this->schedule_time == '' ? 'No hay dato de horas de servicio' : $this->schedule_time,
            ],
            'description' =>  $this->description == '' ? 'No hay dato de descripcion' : $this->description,
            'img_path' =>  $this->img_path == '' ? 'http://img.exe/01.jpg' : $this->img_path,
        ];
    }
}

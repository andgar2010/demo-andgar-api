<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'name'=> $this->name == '' ? 'No hay dato de Categoria' : $this->name ,
            'href'=>[
                'restaurants' => route('restaurants.index', $this->id)
            ],
            'by_user_id'=> route('passport.clients.index',$this->by_user_id)
            ,
        ];
    }
}

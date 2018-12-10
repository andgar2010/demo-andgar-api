<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'category_id' => 'required|integer',
            'name' => 'required|max:255',
            'telephone' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'schedule_day' => 'required|max:255',
            'schedule_time' => 'required|max:255',
            'description' => 'required',
            'img_path' => 'required',
        ];
    }
}

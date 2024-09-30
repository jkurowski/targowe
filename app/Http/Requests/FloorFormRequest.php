<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FloorFormRequest extends FormRequest
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
            'cords' => '',
            'html' => '',
            'active' => 'boolean',
            'type' => 'integer',
            'name' => 'required|string|max:255',
            'meta_title' => '',
            'meta_description' => '',
            'number' => 'required|integer',
            'position' => 'required|integer',
            'investment_id' => 'required|integer',
            'building_id' => 'nullable|integer',
            'area_range' => '',
            'price_range' => ''
        ];
    }
}

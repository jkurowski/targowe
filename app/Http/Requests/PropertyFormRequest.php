<?php

namespace App\Http\Requests;

use App\Rules\NumericWithComma;
use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
            'investment_id' => 'nullable|integer',
            'building_id' => 'nullable|integer',
            'floor_id' => 'nullable|integer',
            'status' => 'required',
            'name' => 'required|string|max:255',
            'name_list' => 'string|max:255',
            'number' => 'required|string|max:255',
            'number_order' => 'integer',
            'type' => 'required|integer',
            'apartment_type' => 'required|integer',
            'specialoffer' => 'required|integer',
            'specialoffer_text' => 'nullable|max:250',
            'garage_text' => 'nullable|max:250',
            'safe_loan' => 'required|integer',
            'rooms' => 'required|integer',
            'area' => '',
            'garden_area' => '',
            'balcony_area' => '',
            'balcony_area_2' => '',
            'terrace_area' => '',
            'loggia_area' => '',
            'parking_space' => '',
            'window' => '',
            'garage' => '',
            'view_360' => '',
            'view_3d' => '',
            'price' => ['nullable', new NumericWithComma],
            'cords' => '',
            'html' => '',
            'meta_title' => '',
            'meta_description' => '',
            'active' => 'boolean',
        ];
    }
}

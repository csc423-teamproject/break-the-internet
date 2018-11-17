<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RetailStoreRequest extends FormRequest
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
            'StoreCode' => 'required|unique:retail_stores,StoreCode',
            'StoreName' => 'required|alpha_dash|max:255',
            'Address' => 'required|alpha_num|max:255',
            'City' => 'required',
            'State' => 'required|max:2',
//            'ZIP' => 'required|regex:/(^\d{5}$)|(^\d{5}-\d{4}$)/i',
            'ZIP' => 'required|between:5,10',
            'Phone' => 'required|phone:US,BE',
            'ManagerName' => 'required|string|min:1|max:255',
        ];
    }
}

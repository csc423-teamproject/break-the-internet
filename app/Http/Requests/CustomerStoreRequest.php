<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'CustomerName' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'State' => 'required|alpha|max:2',
            'ZIP' => 'required|between:5,10',
            'Phone' => 'required|phone:US,BE',
            'Email' => 'required|email'
        ];
    }
//
//    public function messages()
//    {
//        return [
//            'CustomerName.required' => 'Name is required!'
//        ];
//    }
}

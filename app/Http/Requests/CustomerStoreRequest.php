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
            'CustomerName' => 'required|string|max:50',
            'Address' => 'required|string|max:50',
            'City' => 'required|string|max:50',
            'State' => 'required|string|max:2',
            'ZIP' => 'required|min:5',
            'Phone' => 'required|min:10',
            'Email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'CustomerName.required' => 'Name is required!'
        ];
    }
}

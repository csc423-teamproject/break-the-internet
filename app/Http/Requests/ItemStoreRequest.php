<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemStoreRequest extends FormRequest
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
            'Description' => 'required|string|max:255',
            'Size' => 'required|string:max:10',
            'Division' => 'required|string:max:100|exists:divisions,id',
            'Department' => 'required|string:max:100',
            'Category' => 'required|string:max:100|exists:categories,id',
            'ItemCost' => 'required|numeric|min:0.01',
            'ItemRetail' => 'required|numeric|min:0.01',
            'ImageFileName' => 'required',
            'VendorId' => 'required|exists:vendors,id'

        ];
    }

    public function messages()
    {
        return [
            'ItemCost.min' => 'Minimum cost must be at least $0.01.',
            'ItemRetail.min' => 'Minimum retail must be at least $0.01.',
            ];
    }
}

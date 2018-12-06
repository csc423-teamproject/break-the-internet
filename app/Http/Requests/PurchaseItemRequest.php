<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseItemRequest extends FormRequest
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
        $item = Inventory::where('ItemId', '=', $this->ItemId)->first();

        return [
            'CustomerId' => 'required|exists:customers,id',
            'ItemId' => 'required',
            'QuantityPurchased' => 'required|'
            //
        ];
    }
}

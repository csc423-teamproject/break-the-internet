<?php

namespace App\Http\Requests;

use App\Inventory;
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
        $item = Inventory::where('ItemId', '=', $this->ItemId, 'and')->where('StoreId','=',$this->StoreId)->first();
//        dd($item);
        if ($item != null) {
            $qis = $item->QuantityInStock;
        } else {
            $qis = 0;
        }
        return [
            'CustomerId' => 'required|exists:customers,id',
            'ItemId' => 'required',
            'StoreId' => 'required',
            'QuantityPurchased' => 'required|lte:'.$qis
            //
        ];
    }
}

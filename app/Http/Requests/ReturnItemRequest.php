<?php

namespace App\Http\Requests;

use App\Inventory;
use App\InventoryItem;
use App\ReturnToVendorDetail;
use Illuminate\Foundation\Http\FormRequest;

class ReturnItemRequest extends FormRequest
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
//        dd($this->StoreId);
        $item = Inventory::where('ItemId', '=', $this->ItemId)->first();
        $return = ReturnToVendorDetail::where('ItemId', '=', $this->ItemId)->first();
        if ($return != null) {
            $returned = $return->QuantityReturned;
//            dd($returned);
        } else {
            $returned = 0;
        }
//        dd($item);
        if ($item != null) {
            $qis = $item->QuantityInStock;
//            dd($qis);
            $quantity = $qis - $returned;
        } else {
            $quantity = 0;
        }
//        dd($quantity);
        return [
            'ItemId' => 'required',
            'Quantity' => 'required|lte:'.$quantity
            //
        ];
    }
}

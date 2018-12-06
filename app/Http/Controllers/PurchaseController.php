<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseItemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\RetailStore;
use App\InventoryItem;
use App\Inventory;
use App\Customer;
use App\Purchase;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storeData = RetailStore::all();
        return view('purchase.create')->with('storeData', $storeData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = $request->input('StoreId');
        

        return redirect("./purchase/". $store."/edit");
                    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = $id;
        $items = DB::table('inventories')
                    ->where('StoreId', '=', $id)
                    ->where('QuantityInStock' , '>' , 0)
                    ->join('inventory_items', 'inventories.ItemId', '=', 'inventory_items.id')
                    ->select('inventory_items.Description', 'inventory_items.id', 'QuantityInStock')
                    ->get();
        
        return view('purchase.edit')->with('items', $items)->with('store', $store);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PurchaseItemRequest $request, $id)
    {
        $purchase = Purchase::create($request->validated());
//        $purchase->StoreId = $id;
//        $purchase->save();
//        $purchase = new Purchase;
//        $purchase->CustomerId = $request->input('CustomerId');
//        $purchase->ItemId = $request->input('ItemId');
//        $purchase->StoreId = $id;
//        $purchase->QuantityPurchased = $request->input('QuantityPurchased');
//        $purchase->DateTimeOfPurchase = null;
        
        
//        $purchase->save();

        $item = Inventory::all()
        ->where('ItemId', '=', $request->input('ItemId'))
        ->where('StoreId', '=', $id);

        foreach($item as $item){
            $item->QuantityInStock = $item->QuantityInStock - $request->input('QuantityPurchased');
            $item->save();
        }

        return redirect('purchase');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

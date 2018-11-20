<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Order;
use App\RetailStore;
use App\Vendor;
use App\InventoryItem;
use App\Inventory;
use App\OrderDetail;
use App\ReturnToVendor;
use App\ReturnToVendorDetail;

class ReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $returnsData = ReturnToVendor::all()->where('Status', '=', 'Pending');
        $returnData = DB::Table('return_to_vendors')
        ->where('Status', '=', 'Pending')
        ->join('vendors', 'vendors.id', '=', 'return_to_vendors.VendorId')
        ->join('retail_stores', 'retail_stores.id', '=', 'return_to_vendors.StoreId')
        ->select('return_to_vendors.id', 'retail_stores.StoreName', 'vendors.VendorName')
        ->get();
        return view('return.index')
                ->with('returnData', $returnData)
                ->with('returnsData', $returnsData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $storeData = RetailStore::all();
        $vendorData = Vendor::all();
        $itemData = InventoryItem::all();
        return view('return.create')
                    ->with('storeData', $storeData)
                    ->with('vendorData', $vendorData)
                    ->with('itemData', $itemData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $return = new ReturnToVendor;
        $return->VendorId = $request->input('VendorId');
        $return->StoreId = $request->input('StoreId');
        $return->DateTimeOfReturn = null;
        $return->Status = 'Pending';
        $return->save();

        $thisReturn = "./return/".$return->id."/edit";
        return redirect($thisReturn);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $returnData = ReturnToVendor::find($id);
        //$orderDetailData = OrderDetail::all()
        //                       ->where('OrderId', '=', $id);
        $vendor = Vendor::find($returnData->VendorId);
        $store = RetailStore::find($returnData->StoreId);
        //$items = InventoryItem::all();
        $returnDetailData = DB::table('return_to_vendor_details')
                    ->where('ReturnToVendorId', '=', $id)
                    ->join('inventory_items', 'return_to_vendor_details.ItemId', '=', 'inventory_items.id')
                    ->select('return_to_vendor_details.id', 'return_to_vendor_details.ReturnToVendorId', 'return_to_vendor_details.QuantityReturned','inventory_items.Description')
                    ->get();
        return view('return.show')
        ->with('returnData', $returnData)
                            //->with('items', $items)
                            ->with('store', $store)
                            ->with('vendor', $vendor)
                            ->with('returnDetailData', $returnDetailData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $returnData = ReturnToVendor::find($id);
        $items = InventoryItem::all()
                                ->where('ActiveStatus', '==', 'Enabled')
                                ->where('VendorId', '=', $returnData->VendorId);
        return view('return.edit')
                    ->with('returnData', $returnData)
                    ->with('items', $items);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $returnDetail = new ReturnToVendorDetail;
        $returnDetail->ReturnToVendorId = $id;
        $returnDetail->ItemId = $request->input('ItemId');
        $returnDetail->QuantityReturned = $request->input('Quantity');
        $returnDetail->save();


        $thisReturn = "./return/".$id;
        return redirect($thisReturn);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $return = ReturnToVendor::find($id);
        $returnDetails = ReturnToVendorDetail::all()->where('ReturnToVendorId', '=', $return->ReturnToVendorId);

        foreach($returnDetails as $returnDetails){
            $inventory = Inventory::all()
                ->where('ItemId', '=', $returnDetails->ItemId)
                ->where('StoreId', '=', $return->StoreId);
            foreach($inventory as $inventory){
                $inventory->QuantityInStock = $inventory->QuantityInStock - $returnDetails->QuantityReturned;
                $inventory->save();
            }
        }

        $return->Status = 'Complete';
        $return->save();

        return redirect('return');
    }
}

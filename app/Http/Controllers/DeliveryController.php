<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Order;
use App\Vendor;
use App\RetailStore;
use App\InventoryItem;
use App\OrderDetail;
use App\Inventory;


class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('delivery.index');
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
        return redirect("./delivery/".$request->OrderNumber."/edit");
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
        $orderData = Order::find($id);
        //$orderDetailData = OrderDetail::all()
        //                       ->where('OrderId', '=', $id);
        $vendor = Vendor::find($orderData->VendorId);
        $store = RetailStore::find($orderData->StoreId);
        //$items = InventoryItem::all();
        $orderDetailData = DB::table('order_details')
                    ->where('OrderId', '=', $id)
                    ->join('inventory_items', 'order_details.ItemId', '=', 'inventory_items.id')
                    ->select('order_details.id', 'order_details.OrderId', 'order_details.QuantityOrdered','inventory_items.Description')
                    ->get();
        return view('delivery.edit')
        ->with('orderData', $orderData)
                            //->with('items', $items)
                            ->with('store', $store)
                            ->with('vendor', $vendor)
                            ->with('orderDetailData', $orderDetailData);
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
        $orderDetails = OrderDetail::all()->where('OrderId', '=', $id);



        foreach($orderDetails as $orderDetails){

            $order = Order::find($orderDetails->OrderId);

            $inventory = Inventory::all()
                ->where('ItemId', '=', $orderDetails->ItemId)
                ->where('StoreId', '=', $order->StoreId);
//            dd($inventory);

            if($inventory->isEmpty()){ 
                $inventory = new Inventory;
                $inventory->StoreId = $order->StoreId;
                $inventory->ItemId = $orderDetails->ItemId;
                $inventory->QuantityInStock = $orderDetails->QuantityOrdered;
            }else{
                foreach($inventory as $inventory){
                    $inventory->QuantityInStock = $inventory->QuantityInStock + $orderDetails->QuantityOrdered;
                }
            }

            $inventory->save();
        }

        $order = Order::find($id);
        $order->DateTimeOfFulfilment = null;
        $order->Status = 'Delivered';
        $order->save();

        //Quick fix
        $order = Order::find($id);
        $order->DateTimeOfFulfilment = $order->updated_at;
        $order->save();

        return redirect('order');
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

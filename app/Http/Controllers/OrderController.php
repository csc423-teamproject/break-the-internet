<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Order;
use App\RetailStore;
use App\Vendor;
use App\InventoryItem;
use App\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordersData = Order::all()->where("Status","=" ,'Pending');
        $orderData = DB::table('orders')
            ->where('Status', '=', 'Pending')
            ->join('vendors', 'vendors.id', '=', 'orders.VendorId')
            ->join('retail_stores', 'retail_stores.id', '=', 'orders.StoreId')
            ->select('orders.id', 'retail_stores.StoreName', 'vendors.VendorName')
            ->get();
        return view('order.index')
                    ->with('ordersData', $ordersData)
                    ->with('orderData', $orderData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = RetailStore::all();
        $vendors = Vendor::all();
        $items = InventoryItem::all();
        return view('order.create')
                    ->with('stores', $stores)
                    ->with('vendors', $vendors)
                    ->with('items', $items);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->VendorId = $request->input('VendorId');
        $order->StoreId = $request->input('StoreId');
        $order->Status = 'Open';
        //$order->DateTimeOfOrder = 'null';
        //$order->DateTimeOfFulfilment = 'null';
        $order->save();

        $thisOrder = "./order/".$order->id."/edit";
        return redirect($thisOrder);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
//        dd($orderDetailData);

        return view('order.show')
        ->with('orderData', $orderData)
                            //->with('items', $items)
                            ->with('store', $store)
                            ->with('vendor', $vendor)
                            ->with('orderDetailData', $orderDetailData);
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
        $items = InventoryItem::all()
                                ->where('ActiveStatus', '==', 'Enabled')
                                ->where('VendorId', '=', $orderData->VendorId);
        return view('order.edit')
                    ->with('orderData', $orderData)
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
        $orderDetail = new OrderDetail;
        $orderDetail->OrderId = $id;
        $orderDetail->ItemId = $request->input('ItemId');
        $orderDetail->QuantityOrdered = $request->input('Quantity');
        $orderDetail->save();

        $order = Order::find($id);
        $order->Status = 'Pending';
        $order->save();

        $thisOrder = "./order/".$id;
        return redirect($thisOrder);
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

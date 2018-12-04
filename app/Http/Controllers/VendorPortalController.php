<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VendorPortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Needs where to vendor
        $orders = DB::table('orders')
        ->where('Status', '=', "Pending")
        ->join('retail_stores', 'orders.StoreId', '=', 'retail_stores.id')
        ->select('orders.id','retail_stores.StoreName')
        ->get();

        return view('portal.index')->with('orders', $orders);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = DB::table('order_details')
        ->where('OrderId', '=', $id)
        ->join('orders', 'orders.id', '=', 'order_details.OrderId')
        ->join('retail_stores', 'orders.StoreId', '=', 'retail_stores.id')
        ->join('inventory_items', 'inventory_items.id', '=', 'order_details.ItemId')
        ->select('orders.id','retail_stores.StoreName', 'inventory_items.Description', 'order_details.QuantityOrdered' )
        ->get();

        return view('portal.show')->with('items', $items)->with('id', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

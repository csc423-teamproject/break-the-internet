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

class DeliveredReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $today = date("Y-m-d");
        $week = date('Y-m-d', strtotime('-1 week'));
        $data = DB::table('orders')
            ->where('Status', '=', 'Delivered')
            ->join('vendors', 'vendors.id', '=', 'orders.VendorId')
            ->join('retail_stores', 'retail_stores.id', '=', 'orders.StoreId')
            ->select('orders.DateTimeOfFulfilment','orders.id', 'retail_stores.StoreName', 'vendors.VendorName')
            ->get();
        return view('report.delivered')
            ->with('data', $data)
            ->with('today', $today)
            ->with('week', $week);
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

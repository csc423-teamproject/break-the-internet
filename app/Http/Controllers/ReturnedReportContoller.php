<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;


class ReturnedReportContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date("Y-m-d");
        $month = date('Y-m-d', strtotime('-6 month'));

        $data = DB::table('return_to_vendors')
        ->where('return_to_vendors.DateTimeOfReturn', '>=', $month)
        ->join('return_to_vendor_details', 'return_to_vendors.id', '=', 'return_to_vendor_details.ReturnToVendorId')
        ->join('inventory_items', 'inventory_items.id', '=', 'return_to_vendor_details.ItemId')
        ->join('inventories', 'inventories.ItemId', '=', 'inventory_items.id')
        ->groupBy('inventories.ItemId')
        ->select(DB::raw('sum(return_to_vendor_details.QuantityReturned) as count'),'inventory_items.Description')
        ->orderBy('count', 'desc')
        ->limit(10)
        ->get();

        return view('report.return')
            ->with('data', $data)
            ->with('month', $month)
            ->with('today', $today);
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
        $start = $request->input('start');
        $end = $request->input('end');

        $data = DB::table('return_to_vendors')
        ->where('return_to_vendors.DateTimeOfReturn', '>=', $start)
        ->where('return_to_vendors.DateTimeOfReturn', '<=', $end)
        ->join('return_to_vendor_details', 'return_to_vendors.id', '=', 'return_to_vendor_details.ReturnToVendorId')
        ->join('inventory_items', 'inventory_items.id', '=', 'return_to_vendor_details.ItemId')
        ->join('inventories', 'inventories.ItemId', '=', 'inventory_items.id')
        ->groupBy('inventories.ItemId')
        ->select(DB::raw('sum(return_to_vendor_details.QuantityReturned) as count'),'inventory_items.Description')
        ->orderBy('count', 'desc')
        ->limit(10)
        ->get();

        return view('report.return')
            ->with('data', $data)
            ->with('month', $start)
            ->with('today', $end);
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

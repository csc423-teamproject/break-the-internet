<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\InventoryItem;
use App\Vendor;
use App\Category;
use App\Division;

class InventoryItemController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemData = InventoryItem::all();
        return view('inventoryitem.index')->with('itemData', $itemData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendorData = Vendor::all();
        $categories = Category::all();
        $divisions = Division::all();
        return view('inventoryItem.create')
                    ->with('vendorData', $vendorData)
                    ->with('categories', $categories)
                    ->with('divisions', $divisions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $item = new InventoryItem;
        $item->Description = $request->input('Description');
        $item->Size = $request->input('Size');
        $item->Division = $request->input('Division');
        $item->Department = $request->input('Department');
        $item->Category = $request->input('Category');
        $item->ItemCost = $request->input('ItemCost');
        $item->ItemRetail = $request->input('ItemRetail');
        $item->ImageFileName = $request->input('ImageFileName');
        $item->VendorId = $request->input('VendorId');
        $item->ActiveStatus = 'Enabled';
        $item->save();

        return redirect('item')->with('success', 'Item Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemData = InventoryItem::find($id);
        return view('inventoryitem.show')->with('itemData', $itemData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemData = InventoryItem::findOrFail($id);
        $vendorData = Vendor::all();
        $categories = Category::all();
        $divisions = Division::all();
        return view('inventoryitem.edit')
                    ->with('itemData', $itemData)
                    ->with('vendorData', $vendorData)
                    ->with('categories', $categories)
                    ->with('divisions', $divisions);
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
        $item = InventoryItem::find($id);
        $item->Description = $request->input('Description');
        $item->Size = $request->input('Size');
        $item->Division = $request->input('Division');
        $item->Department = $request->input('Department');
        $item->Category = $request->input('Category');
        $item->ItemCost = $request->input('ItemCost');
        $item->ItemRetail = $request->input('ItemRetail');
        $item->ImageFileName = $request->input('ImageFileName');
        $item->VendorId = $request->input('VendorId');
        $item->save();

        return redirect('item')->with('success', 'Item Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = InventoryItem::find($id);
        $item->ActiveStatus = 'Disabled';
        $item->save();

        return redirect('item')->with('success', 'Item Removed');
    }
}

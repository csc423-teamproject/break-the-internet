<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendorStoreRequest;
use App\Http\Requests\VendorUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Vendor;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all()->where('ActiveStatus', '==', true);
        return view('vendor.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorStoreRequest $request)
    {
        Vendor::create($request->validated());
//       dd($validated = $request->validated());
//
//        $vendor = new Vendor();
//
//        $vendor->VendorCode = request('VendorCode');
//        $vendor->VendorName = request('VendorName');
//        $vendor->Address = request('Address');
//        $vendor->City = request('City');
//        $vendor->State = request('State');
//        $vendor->ZIP = request('ZIP');
//        $vendor->Phone = request('Phone');
//        $vendor->ContactPersonName = request('ContactPersonName');
//        $vendor->Password = request('Password');
//        $vendor->ActiveStatus = true;
//
//        $vendor->save();

        return redirect('/vendor')->with('status', 'Vendor Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        return view('vendor.show', compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendorData = Vendor::findOrFail($id);
        return view('vendor.edit')->with('vendorData', $vendorData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VendorUpdateRequest $request, Vendor $vendor)
    {
//        $vendor = Vendor::find($id);
//
//        $vendor->VendorCode = request('VendorCode');
//        $vendor->VendorName = request('VendorName');
//        $vendor->Address = request('Address');
//        $vendor->City = request('City');
//        $vendor->State = request('State');
//        $vendor->ZIP = request('ZIP');
//        $vendor->Phone = request('Phone');
//        $vendor->ContactPersonName = request('ContactPersonName');
//        $vendor->Password = request('Password');
//        $vendor->ActiveStatus = true;
//
//        $vendor->save();

        $vendor->update($request->validated());

        return redirect('/vendor')->with('status', 'Vendor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->ActiveStatus = 'Disabled';
        $vendor->save();

        return redirect('vendor')->with('success', 'Vendor Removed');
    }
}

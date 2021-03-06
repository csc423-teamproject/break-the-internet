<?php

namespace App\Http\Controllers;

use App\RetailStore;
use Illuminate\Http\Request;

class RetailStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = RetailStore::all()->where('ActiveStatus', '==', true);

        return view('retailstores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('retailstores.create');
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
        $retailstore = new RetailStore();

        $retailstore->StoreCode = request('StoreCode');
        $retailstore->StoreName = request('StoreName');
        $retailstore->Address = request('Address');
        $retailstore->City = request('City');
        $retailstore->State = request('State');
        $retailstore->ZIP = request('ZIP');
        $retailstore->Phone = request('Phone');
        $retailstore->ManagerName = request('ManagerName');
        $retailstore->ActiveStatus = true;

        $retailstore->save();

        return redirect('/retailstores');
//        return request()->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
//    public function show(RetailStore $retailStore)
    public function show($id)
    {
        $retailstore = RetailStore::find($id);
        return view('retailstores.show')->with('retailstore', $retailstore);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
//    public function edit(RetailStore $retailStore)
    public function edit($StoreId)
    {
        //
        $retailstore = RetailStore::findOrFail($StoreId);
//        return $retailstore;
        return view('retailstores.edit', compact('retailstore'));

//        redirect('/retailstores');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, RetailStore $retailStore)
    public function update(Request $request, $id)
    {
        $retailstore = RetailStore::find($id);
        $retailstore->StoreCode = request('StoreCode');
        $retailstore->StoreName = request('StoreName');
        $retailstore->Address = request('Address');
        $retailstore->City = request('City');
        $retailstore->State = request('State');
        $retailstore->ZIP = request('ZIP');
        $retailstore->Phone = request('Phone');
        $retailstore->ManagerName = request('ManagerName');
        $retailstore->save();

        return redirect('retailstores')->with('success', 'Store Updated');
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
//    public function destroy(RetailStore $retailStore)
    public function destroy($StoreId)
    {
        //
        $store = RetailStore::find($StoreId);
        $store->ActiveStatus = 'Disabled';
        $store->save();

        return redirect('retailstores')->with('success', 'Location Removed');
    }
}

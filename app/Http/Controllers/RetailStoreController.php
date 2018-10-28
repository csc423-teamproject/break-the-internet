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
    public function show(RetailStore $retailStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
    public function edit(RetailStore $retailStore)
    {
        //
        return view('retailstores.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RetailStore $retailStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(RetailStore $retailStore)
    {
        //
    }
}

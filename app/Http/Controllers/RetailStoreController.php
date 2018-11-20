<?php

namespace App\Http\Controllers;

use App\Http\Requests\RetailStoreRequest;
use App\Http\Requests\RetailUpdateRequest;
use App\RetailStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
     *use App\Http\Requests\RetailStoreRequest;

     * @param  \App\Http\Requests\RetailStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RetailStoreRequest $request)
    {
        RetailStore::create($request->validated());
        return redirect('retailstores')->with('status', 'Retail Location Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
    public function show(RetailStore $retailstore)
    {
        return view('retailstores.show', compact('retailstore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
    public function edit(RetailStore $retailstore)
    {

        return view('retailstores.edit', compact('retailstore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RetailUpdateRequest  $request
     * @param  \App\RetailStore  $retailstore
     * @return \Illuminate\Http\Response
     */
    public function update(RetailUpdateRequest $request, RetailStore $retailstore)
    {
        $retailstore->update(request()->all());

        return redirect('retailstores')->with('status', 'Location Updated');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(RetailStore $retailstore)
    {
        $retailstore->update(['ActiveStatus'=>'Disabled']);
        return redirect('retailstores')->with('status', 'Location Removed');
    }
}

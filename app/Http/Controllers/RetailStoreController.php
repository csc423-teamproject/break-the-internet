<?php

namespace App\Http\Controllers;

use App\Http\Requests\RetailStoreRequest;
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RetailStoreRequest $request)
    {
//        $attributes = request()->validate([
//                'StoreCode' => 'required',
//                'StoreName' => 'required',
//                'Address' => 'required',
//                'City' => 'required',
//                'State' => 'required',
//                'ZIP' => 'required',
//                'Phone' => 'required',
//                'ManagerName' => 'required',
//        ]);

        $validated = $request->validated();


//        RetailStore::create(request()->all());
        RetailStore::create($validated);
//        RetailStore::create(
//            [
//                'StoreCode' => request('StoreCode'),
//                'StoreName' => request('StoreName'),
//                'Address' => request('Address'),
//                'City' => request('City'),
//                'State' => request('State'),
//                'ZIP' => request('ZIP'),
//                'Phone' => request('Phone'),
//                'ManagerName' => request('ManagerName'),
//                'ActiveStatus' => true
//            ]
//        );

        return redirect('/retailstores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
    public function show(RetailStore $retailStore)
//    public function show($id)
    {
//        $retailstore = RetailStore::find($id);
        return view('retailstores.show', compact('retailStore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RetailStore  $retailStore
     * @return \Illuminate\Http\Response
     */
    public function edit(RetailStore $retailstore)
//    public function edit($StoreId)
    {
        //
//        $retailstore = RetailStore::findOrFail($StoreId);
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
    public function update(Request $request, RetailStore $retailStore)
    {
        $retailStore->update(request()->all());

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
        $retailStore = RetailStore::find($StoreId);
        $retailStore->ActiveStatus = 'Disabled';
        $retailStore->save();

        return redirect('retailstores')->with('success', 'Location Removed');
    }
}

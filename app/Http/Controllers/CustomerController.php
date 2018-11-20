<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Customer;
use App\Http\Requests\CustomerStoreRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerData = Customer::all();
        return view('customer.index')->with('customerData', $customerData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerStoreRequest $request)
    {

        Customer::create($request->validated());

        return redirect('customer')->with('status', 'Customer Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerStoreRequest $request, Customer $customer)
    {
        $validated = $request->validated();
//        $customer = Customer::find($id);
//        $customer->CustomerName = $request->input('CustomerName');
//        $customer->Address = $request->input('Address');
//        $customer->City = $request->input('City');
//        $customer->State = $request->input('State');
//        $customer->ZIP = $request->input('ZIP');
//        $customer->Phone = $request->input('Phone');
//        $customer->Email = $request->input('Email');
//        $customer->save();
        $customer->update($validated);

        return redirect('customer')->with('status', 'Customer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
//        $customer = Customer::find($id);
//        $customer->ActiveStatus = 'Disabled';
        $customer->update(['ActiveStatus'=>'Disabled']);


        return redirect('customer')->with('status', 'Customer Removed');
    }
}

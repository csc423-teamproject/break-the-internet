@extends('layouts.app')

@section('content')
    <h1>Add a new Retail Location</h1>

    <form method="post" action="/retailstores">
        @csrf
        <div>
            <input type="text" name="StoreCode" placeholder="Store Code">
        </div>
        <div>
            <input type="text" name="StoreName" placeholder="Store Name">
        </div>
        <div>
            <input type="text" name="Address" placeholder="Address">
        </div>
        <div>
            <input type="text" name="City" placeholder="City">
        </div>
        <div>
            <input type="text" name="State" placeholder="State">
        </div>
        <div>
            <input type="text" name="ZIP" placeholder="ZIP">
        </div>
        <div>
            <input type="text" name="Phone" placeholder="Phone">
        </div>
        <div>
            <input type="text" name="ManagerName" placeholder="Manager">
        </div>
        <div>
            <button type="submit">Add Store Location</button>
        </div>
    </form>
@endsection

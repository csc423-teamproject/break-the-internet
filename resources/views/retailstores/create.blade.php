@extends('layouts.app')

@section('title', 'Add Store Location')

@section('content')
    <h1>Add a new Retail Location</h1>

    <form method="post" action="/retailstores">
        @csrf
        <div class="form-group">
            <label for="StoreCode" class="col-form-label">Store Code</label>
            <input class="form-control"  type="text" name="StoreCode" placeholder="Store Code">
        </div>
        <div class="form-group">
            <label for="StoreName" class="col-form-label">Store Name</label>

            <input class="form-control"  type="text" name="StoreName" placeholder="Store Name">
        </div>
        <div class="form-group">
            <label for="Address" class="col-form-label">Address</label>

            <input class="form-control"  type="text" name="Address" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="City" class="col-form-label">City</label>

            <input class="form-control"  type="text" name="City" placeholder="City">
        </div>
        <div class="form-group">
            <label for="State" class="col-form-label">State</label>

            <input class="form-control"  type="text" name="State" placeholder="State">
        </div>
        <div class="form-group">
            <label for="ZIP" class="col-form-label">ZIP</label>

            <input class="form-control"  type="text" name="ZIP" placeholder="ZIP">
        </div>
        <div class="form-group">
            <label for="Phone" class="col-form-label">Phone</label>

            <input class="form-control"  type="text" name="Phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="ManagerName" class="col-form-label">Manger Name</label>

            <input class="form-control"  type="text" name="ManagerName" placeholder="Manager">
        </div>
        <div class="form-group">
            <button type="submit">Add Store Location</button>
        </div>
    </form>
@endsection

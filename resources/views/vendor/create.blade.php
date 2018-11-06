@extends('layouts.app')

@section('title', 'Vendor Maintenance')

@section('content')
    <h1>Add Vendor</h1>
    <form action="/vendor" method="post">
        @csrf
            <div class="form-group">
            <label>Vendor Code</label>
                <input type="text" class="form-control" name="VendorCode" id="VendorCode" placeholder="Vendor Code">
            </div>
            <div class="form-group">
            <label>Vendor Name</label>
                <input type="text" class="form-control" name="VendorName" id="VendorName" placeholder="Vendor Name">
            </div>
            <div class="form-group">
            <label>Address</label>
                <input type="text" class="form-control" name="Address" id="Address" placeholder="Address">
            </div>
            <div class="form-group">
            <label>City</label>
                <input type="text" class="form-control" name="City" id="City" placeholder="City">
            </div>
            <div class="form-group">
            <label>State</label>
                <input type="text" class="form-control" name="State" id="State" placeholder="State">

            </div>
            <div class="form-group">
            <label>ZIP</label>
                <input type="text" class="form-control" name="ZIP" id="ZIP" placeholder="ZIP">
            </div>
            <div class="form-group">
            <label>Phone</label>
                <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Phone">

            </div>
            <div class="form-group">
            <label>Contact Person</label>
                <input type="text" class="form-control" name="ContactPersonName" id="ContactPersonName" placeholder="Contact Person">
            </div>
            <div class="form-group">
            <label>Password</label>
                <input type="password" class="form-control" name="Password" id="Password" placeholder="Password">
            </div>
        <button type="submit" class="btn btn-primary">Add Vendor</button>
    </form>
@endsection

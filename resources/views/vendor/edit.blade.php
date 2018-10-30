@extends('layouts.app')

@section('title', 'Vendor Maintenance')

@section('content')
    <h2>Edit Vendor</h2>

    <form method="post" action="/vendor/{{ $vendorData->VendorId }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="VendorCode" id="VendorCode" value="{{ $vendorData->VendorCode }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="VendorName" id="VendorName" value="{{ $vendorData->VendorName }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Address" id="Address" value="{{ $vendorData->Address }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="City" id="City" value="{{ $vendorData->City }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="State" id="State" value="{{ $vendorData->State }}">

        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="ZIP" id="ZIP" value="{{ $vendorData->ZIP }}">
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" name="Phone" id="Phone" value="{{ $vendorData->Phone }}">

        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="ContactPersonName" id="ContactPersonName" value="{{ $vendorData->ContactPersonName }}">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="Password" id="Password" value="Password">
        </div>
        <button type="submit" class="btn btn-primary">Modify Vendor</button>

    </form>
    <hr />
    <p><a href="/vendor/{{$vendorData->VendorId}}/" class="btn btn-md btn-danger" role="button">Delete this vendor</a></p>
@endsection

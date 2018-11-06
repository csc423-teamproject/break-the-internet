@extends('layouts.app')

@section('title', 'Vendor Maintenance')

@section('content')
    <h1>Are you sure you want to delete this vendor?</h1>
    <div class="form-inline">
        <form method='POST' action="/vendor/{{ $vendorData->VendorId }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/vendor" class="btn btn-primary">No</a>
        </form>
    </div>
@endsection

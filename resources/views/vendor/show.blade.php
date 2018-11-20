@extends('layouts.app')

@section('title', 'Vendor Maintenance')
@section('heading', 'Are you sure you want to remove this vendor?')
@section('content')
    <div class="alert alert-info">
        <h4>Vendor Code: {{ $vendor->VendorCode }}</h4><br>
        <h4>Vendor Name: {{ $vendor->VendorName }}</h4>
    </div>
    <div class="form-inline">
        <form method='POST' action="/vendor/{{ $vendor->id }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/vendor" class="btn btn-primary">No</a>
        </form>
    </div>
@endsection

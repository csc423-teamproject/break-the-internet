@extends('layouts.app')

@section('title', 'Order Maintenance')
@section('heading', 'Add Order')
@section('content')
    <form action="/order" method="post">
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->

            <div class="form-group">
                <label>Vendor</Label>
                <select class="form-control" name="VendorId" id="VendorId">
                    @foreach($vendors as $vendor)
                        @if($vendor->ActiveStatus == 'Enabled')
                            <option value={{$vendor->id}}>{{$vendor->VendorName}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Store</Label>
                <select class="form-control" name="StoreId" id="StoreId">
                    @foreach($stores as $store)
                        @if($store->ActiveStatus == 'Enabled')
                            <option value={{$store->id}}>{{$store->StoreName}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Order</button>
            </div>
        </div>
    </form>
@endsection

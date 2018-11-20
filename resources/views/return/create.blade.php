@extends('layouts.app')

@section('title', 'Return Maintenance')

@section('content')
    <h1>Add Return</h1>
    <form action="/return" method="post">
        @csrf
        <div>
                <label>Vendor</Label>
                    <select class="form-control" name="VendorId" id="VendorId">
                            @foreach($vendorData as $vendor)
                            @if($vendor->ActiveStatus == 'Enabled')
                                <option value={{$vendor->id}}>{{$vendor->VendorName}}</option>
                            @endif
                        @endforeach
                    </select>
        </div>
        <div>
            <label>Store</Label>
                <select class="form-control" name="StoreId" id="StoreId">
                        @foreach($storeData as $store)
                            @if($store->ActiveStatus == 'Enabled')
                                <option value={{$store->id}}>{{$store->StoreName}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <br />
        <button type="submit" class="btn btn-primary">Return to vendor</button>
    </form>
@endsection

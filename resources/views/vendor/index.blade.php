@extends('layouts.app')

@section('title', 'Vendor Maintenance')

@section('content')
    <h2>Add/Modify/Delete Vendor</h2>
    <div class="col-md-6">
        @if(count($vendorData->where("ActiveStatus", 'Enabled')) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for vendors...">
            <ul id="searchUL">
                @foreach($vendorData as $vendorData)
                    @if($vendorData->ActiveStatus == 'Enabled')
                        <li><a href="/vendor/{{$vendorData->VendorId}}/edit">{{$vendorData->VendorName}}</a></li>
                    @endif
                @endforeach
            </ul>
        @else
            <p>No vendors found</p>
        @endif
        <hr />
        <p><a href="./vendor/create/" class="btn btn-md btn-primary" role="button">Add new vendor</a></p>
        </div>
@endsection

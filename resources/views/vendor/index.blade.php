@extends('layouts.app')

@section('title', 'Vendor Maintenance')
@section('heading', 'Vendors')
@section('content')
    <div class="col-md-6">
        @if(count($vendors->where("ActiveStatus", 'Enabled')) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for vendors...">
            <ul id="searchUL">
                @foreach($vendors as $vendor)
                    @if($vendor->ActiveStatus == 'Enabled')
                        <li><a href="/vendor/{{$vendor->id}}/edit">{{$vendor->VendorName}}</a></li>
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

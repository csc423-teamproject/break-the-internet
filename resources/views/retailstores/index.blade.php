@extends('layouts.app')

@section('title', 'Store Location Maintenance')
@section('heading', 'Retail Locations')
@section('content')
    <div class="col-md-6">
        @if(count($stores->where("ActiveStatus", 'Enabled')) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for stores...">
            <ul id="searchUL">
                @foreach($stores as $store)
                    @if($store->ActiveStatus == 'Enabled')
                        <li><a href="/retailstores/{{$store->id}}/edit">{{$store->StoreName}} {{$store->StoreCode}}</a></li>
                    @endif
                @endforeach
            </ul>
        @else
            <p>No Stores found</p>
        @endif
        <hr />
        <p><a href="./retailstores/create/" class="btn btn-md btn-primary" role="button">Add new store</a></p>
    </div>
@endsection

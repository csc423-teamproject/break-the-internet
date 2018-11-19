@extends('layouts.app')

@section('title', 'Item Maintenance')

@section('content')
    <h1>Order: {{$orderData->OrderId}}</h1>
    <h3>Vendor: {{$vendor->VendorName}}</h3>
    <h3>Store: {{$store->StoreName}}</h3>
    <hr />
    <br />
    <div class="col-md-6">
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for items...">
            <ul id="searchUL">
                @foreach($orderDetailData as $orderDetailData)
                            <li><a href="">{{$orderDetailData->Description}}, {{$orderDetailData->QuantityOrdered}}</a></li>
                @endforeach
            </ul>
        <hr />
        <p><a href="./{{$orderData->OrderId}}/edit" class="btn btn-md btn-primary" role="button">Add new item</a></p>
        </div>
        <form method="post" action="/delivery/{{ $orderData->OrderId }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-primary">Order Delivered</button>
        </form>
@endsection
@extends('layouts.app')

@section('title', 'Item Maintenance')
@section('heading', 'Vendor Order')
@section('content')
    <div class="alert alert-primary">
        <h3>Order: {{ $orderData->id }}</h3>
        <h3>Vendor: {{$vendor->VendorName}}</h3>
        <h3>Store: {{$store->StoreName}}</h3>
    </div>
    <hr />
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for items...">
            <ul id="searchUL">
                @foreach($orderDetailData as $orderdetail)
                    <li><a href="">{{$orderdetail->Description}}, {{$orderdetail->QuantityOrdered}}</a></li>
                @endforeach
            </ul>
        </div>
        <hr>
        @if($orderData->Status == 'Pending')
        <div class="form-group">
            <p><a href="./{{$orderData->id}}/edit" class="btn btn-md btn-primary" role="button">Add new item</a></p>
            <form method="post" action="/delivery/{{ $orderData->id }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-primary">Order Delivered</button>
            </form>
        </div>
        @else
            <p>Order has been delivered</p>
        @endif
    </div>

@endsection

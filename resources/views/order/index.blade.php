@extends('layouts.app')

@section('title', 'Order Maintenance')
@section('heading', 'Orders')
@section('content')
    <div class="col-md-6">
        @if(count($ordersData) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for orders...">
            <ul id="searchUL">
                @foreach($orderData as $order)
                        <li><a href="/order/{{$order->id}}">{{$order->VendorName}} &#8594; {{$order->StoreName}}, ({{$order->id}})</a></li>
                @endforeach
            </ul>
        @else
            <p>No orders found</p>
        @endif
        <hr />
        <p><a href="/order/create/" class="btn btn-md btn-primary" role="button">Add new order</a></p>
        </div>
@endsection

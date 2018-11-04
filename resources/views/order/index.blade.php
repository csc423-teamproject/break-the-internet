@extends('layouts.app')

@section('title', 'Order Maintenance')

@section('content')
    <h2>Orders</h2>
    <div class="col-md-6">
        @if(count($orderData->where("Status", 'Pending')) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for orders...">
            <ul id="searchUL">
                @foreach($orderData as $orderData)
                    @if($orderData->Status == 'Pending')
                        <li><a href="./order/{{$orderData->orderId}}/edit">{{$orderData->OrderId}}</a></li>
                    @endif
                @endforeach
            </ul>
        @else
            <p>No orders found</p>
        @endif
        <hr />
        <p><a href="./order/create/" class="btn btn-md btn-primary" role="button">Add new order</a></p>
        </div>
@endsection
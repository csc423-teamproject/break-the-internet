@extends('layouts.app')

@section('title', 'Portal')

@section('content')
<h1>Current Orders</h1>
<div class="col-md-6">
        @if(count($orders) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for orders...">
            <ul id="searchUL">
                @foreach($orders as $orders)
                        <li><a href="/portal/{{$orders->id}}">{{$orders->StoreName}}</a></li>
                @endforeach
            </ul>
        @else
            <p>No orders</p>
        @endif
    
@endsection
@extends('layouts.app')

@section('title', 'Report')

@section('content')
    <h3>Reports</h3>
    <div class="card-deck">
        <div class="card">
            <!--<img class="card-img-top" src="{{ asset('images/shelves.png') }}">
            -->
            <div class="card-header">Inventory</div>
            <div class="card-body">
                <a href="/items" class="btn btn-primary">Current Inventory &amp; Thresholds</a>
                
                
            </div>
        </div>
        <div class="card">
            <div class="card-header">Orders</div>
            <div class="card-body">
                <a href="/delivered"class="btn btn-primary">Delivered</a>
                <a href="/returned" class="btn btn-primary">Returned</a>
            </div>
        </div>
    </div>
@endsection
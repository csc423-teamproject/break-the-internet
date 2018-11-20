@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('heading', 'Are you sure you want to remove this customer?')

@section('content')
    <div class="alert alert-info">
        <h4>Customer Name: {{ $customer->CustomerName }}</h4><br>
        <h4>Phone: {{ $customer->Phone }}</h4>
    </div>
    <div class="form-inline">
        <form method='POST' action="/customer/{{ $customer->CustomerId }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/customer" class="btn btn-primary">No</a>
        </form>
    </div>
@endsection

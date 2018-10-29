@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Are you sure you want to delete this customer?</h1>
    <div class="form-inline">
        <form method='POST' action="/customer/{{ $customerData->CustomerId }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/customer" class="btn btn-primary">No</a>
        </form>
    </div>
@endsection

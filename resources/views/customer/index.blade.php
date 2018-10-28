@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Add/Modify/Delete Customer</h1>
    @if(count($customerData) > 1)
        @foreach($customerData as $customerData)
            <div>
                <p><a href="./customer/{{$customerData->CustomerId}}/edit">{{$customerData->CustomerName}}</a></p>
            </div>
        @endforeach
        @else
            <p>No customers found</p>
        @endif
        <hr />
        <p><a href="./customer/create/">Add new customer</a></p>
@endsection
@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Add/Modify/Delete Customer</h1>
    @if(count($customerData->where("Status", 'Active')) >= 1)
        <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for customers..">
        <ul id="searchUL">
            @foreach($customerData as $customerData)
                @if($customerData->Status == 'Active')
                    <li><a href="./customer/{{$customerData->CustomerId}}/edit">{{$customerData->CustomerName}}</a></li>
                @endif
            @endforeach
        </ul>
    @else
        <p>No customers found</p>
    @endif
    <hr />
        <p><a href="./customer/create/">Add new customer</a></p>
@endsection
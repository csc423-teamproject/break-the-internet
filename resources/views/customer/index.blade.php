@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h2>Add/Modify/Delete Customer</h2>
    <div class="col-md-6">
        @if(count($customerData->where("Status", 'Active')) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for customers...">
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
        <p><a href="./customer/create/" class="btn btn-md btn-primary" role="button">Add new customer</a></p>
        </div>
@endsection
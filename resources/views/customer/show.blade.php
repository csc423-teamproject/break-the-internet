@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Are you sure you want to delete this customer?</h1>
    {!!Form::open(['action' => ['addCustomerController@destroy', $customerData->CustomerId], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn'])}}
    {!!Form::close() !!}
@endsection
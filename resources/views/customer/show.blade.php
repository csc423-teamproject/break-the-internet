@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h2>Are you sure you want to delete this customer?</h2>
    {!!Form::open(['action' => ['addCustomerController@destroy', $customerData->CustomerId], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Yes', ['class' => 'btn btn'])}}
    {!!Form::close() !!}
    <hr />
    <p><a href="../../customer/">Back to customer screen</a></p>
@endsection
@extends('layouts.app')

@section('title', 'Show Retail Store')

@section('content')
    {{--<h1>Are you sure you want to delete this store?</h1>--}}
    {{--{!!Form::open(['action' => ['CustomerController', $customerData->CustomerId], 'method' => 'POST'])!!}--}}
        {{--{{Form::hidden('_method', 'DELETE')}}--}}
        {{--{{Form::submit('Yes', ['class' => 'btn btn'])}}--}}
    {{--{!!Form::close() !!}--}}
    <hr />
    <p><a href="../../retailstores/">Back to store screen</a></p>
@endsection

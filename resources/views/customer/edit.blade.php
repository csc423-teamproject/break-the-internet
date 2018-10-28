@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Edit Customer</h1>
    {!! Form::open(['action' => ['addCustomerController@update', $customerData->CustomerId], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('CustomerName', 'Name')}}
                {{Form::text('CustomerName', $customerData->CustomerName, ['class' => 'form-control', 'placeholder' => 'CustomerName'])}}
            </div>
            <div class="form-group">
                    {{Form::label('CustomerAddress', 'Address')}}
                    {{Form::text('CustomerAddress', $customerData->CustomerAddress, ['class' => 'form-control', 'placeholder' => 'CustomerAddress'])}}
            </div>
            <div class="form-group">
                    {{Form::label('City', 'City')}}
                    {{Form::text('City', $customerData->City, ['class' => 'form-control', 'placeholder' => 'City'])}}
            </div>
            <div class="form-group">
                    {{Form::label('StateCode', 'State Code')}}
                    {{Form::text('StateCode', $customerData->StateCode, ['class' => 'form-control', 'placeholder' => 'StateCode'])}}
            </div>
            <div class="form-group">
                    {{Form::label('ZIP', 'ZIP')}}
                    {{Form::text('ZIP', $customerData->ZIP, ['class' => 'form-control', 'placeholder' => 'ZIP'])}}
            </div>
            <div class="form-group">
                    {{Form::label('Phone', 'Phone')}}
                    {{Form::text('Phone', $customerData->Phone, ['class' => 'form-control', 'placeholder' => 'Phone'])}}
            </div>
            <div class="form-group">
                    {{Form::label('Email', 'Email')}}
                    {{Form::text('Email', $customerData->Email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form:: close() !!}
    <hr />
    <p><a href="./../../customer/{{$customerData->CustomerId}}/" style="color:red">Delete this customer</a></p>
@endsection
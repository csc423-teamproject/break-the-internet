@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h2>Edit Customer</h2>
    {!! Form::open(['action' => ['customerController', $customerData->CustomerId], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('CustomerName', 'Name')}}
                {{Form::text('CustomerName', $customerData->CustomerName, ['class' => 'form-control', 'placeholder' => 'CustomerName'])}}
            </div>
            <div class="form-group">
                    {{Form::label('Address', 'Address')}}
                    {{Form::text('Address', $customerData->Address, ['class' => 'form-control', 'placeholder' => 'Address'])}}
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
    <p><a href="./../../customer/{{$customerData->CustomerId}}/" class="btn btn-md btn-danger" role="button">Delete this customer</a></p>
@endsection

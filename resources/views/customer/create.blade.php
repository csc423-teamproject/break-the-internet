@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Add/Modify/Delete Customer</h1>
    {!! Form::open(['action' => 'addCustomerController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('CustomerName', 'Name')}}
                {{Form::text('CustomerName', '')}}
            </div>
            <div class="form-group">
                    {{Form::label('CustomerAddress', 'Address')}}
                    {{Form::text('CustomerAddress', '')}}
            </div>
            <div class="form-group">
                    {{Form::label('City', 'City')}}
                    {{Form::text('City', '')}}
            </div>
            <div class="form-group">
                    {{Form::label('StateCode', 'State Code')}}
                    {{Form::text('StateCode', '')}}
            </div>
            <div class="form-group">
                    {{Form::label('ZIP', 'ZIP')}}
                    {{Form::text('ZIP', '')}}
            </div>
            <div class="form-group">
                    {{Form::label('Phone', 'Phone')}}
                    {{Form::text('Phone', '')}}
            </div>
            <div class="form-group">
                    {{Form::label('Email', 'Email')}}
                    {{Form::text('Email', '')}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form:: close() !!}
@endsection
@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Add Customer</h1>
    {!! Form::open(['action' => 'customerController', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('CustomerName', 'Name')}}
                {{Form::text('CustomerName', '', ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            <div class="form-group">
                    {{Form::label('Address', 'Address')}}
                    {{Form::text('Address', '', ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            <div class="form-group">
                    {{Form::label('City', 'City')}}
                    {{Form::text('City', '', ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            <div class="form-group">
                    {{Form::label('StateCode', 'State Code')}}
                    {{Form::text('StateCode', '', ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            <div class="form-group">
                    {{Form::label('ZIP', 'ZIP')}}
                    {{Form::text('ZIP', '', ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            <div class="form-group">
                    {{Form::label('Phone', 'Phone')}}
                    {{Form::text('Phone', '', ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            <div class="form-group">
                    {{Form::label('Email', 'Email')}}
                    {{Form::text('Email', '', ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form:: close() !!}
@endsection

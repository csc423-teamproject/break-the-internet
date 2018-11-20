@extends('layouts.app')

@section('title', 'Customer Maintenance')
@section('heading', 'Add Customer')
@section('content')
    <form action="/customer" method="post">
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->
            <div class="form-group">
                    <label>Customer Name</Label>
                <input type="text" class="form-control {{ $errors->has('CustomerName') ? 'border-danger' : ''}}" name="CustomerName" id="CustomerName" placeholder="Customer Name" value = "{{ old('CustomerName') }}">
            </div>
            <div class="form-group">
                    <label>Address</Label>
                <input type="text" class="form-control {{ $errors->has('Address') ? 'border-danger' : ''}}" name="Address" id="Address" placeholder="Address" value = "{{ old('Address') }}">
            </div>
            <div class="form-group">
                    <label>City</Label>
                <input type="text" class="form-control {{ $errors->has('City') ? 'border-danger' : ''}}" name="City" id="City" placeholder="City" value = "{{ old('CIty') }}">
            </div>
            <div class="form-group">
                    <label>State</Label>
                <input type="text" class="form-control {{ $errors->has('State') ? 'border-danger' : ''}}" name="State" id="State" placeholder="State" value = "{{ old('State') }}">

            </div>
            <div class="form-group">
                    <label>ZIP</Label>
                <input type="text" class="form-control {{ $errors->has('ZIP') ? 'border-danger' : ''}}" name="ZIP" id="ZIP" placeholder="ZIP" value="{{ old('ZIP') }}">
            </div>
            <div class="form-group">
                    <label>Phone</Label>
                <input type="tel" class="form-control {{ $errors->has('Phone') ? 'border-danger' : ''}}" name="Phone" id="Phone" placeholder="Phone" value="{{ old('Phone') }}">

            </div>
            <div class="form-group">
                    <label>E-mail</Label>
                <input type="email" class="form-control {{ $errors->has('Email') ? 'border-danger' : ''}}" name="Email" id="Email" placeholder="E-Mail" value="{{ old('Email') }}">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Add Customer</button>
            </div>

        </div>

    </form>
@endsection

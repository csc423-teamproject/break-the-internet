@extends('layouts.app')

@section('title', 'Customer Maintenance')
@section('heading', 'Modify Customer')
@section('content')

    <form method="post" action="/customer/{{ $customer->id }}">
        @method('PATCH')
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->

            <div class="form-group">
                <label>Customer Name</Label>
                <input type="text" class="form-control {{ $errors->has('CustomerName') ? 'border-danger' : ''}}" name="CustomerName" id="CustomerName" placeholder="Customer Name" value="{{ old('CustomerName') ? old('CustomerName') : $customer->CustomerName }}">
            </div>
            <div class="form-group">
                    <label>Address</Label>
                <input type="text" class="form-control {{ $errors->has('Address') ? 'border-danger' : ''}}" name="Address" id="Address" placeholder="Address" value="{{ old('Address') ? old('Address') : $customer->Address }}">

            </div>
            <div class="form-group">
                    <label>City</Label>
                <input type="text" class="form-control {{ $errors->has('City') ? 'border-danger' : ''}}" name="City" id="City" placeholder="City" value="{{ old('City') ? old('City') : $customer->City }}">

            </div>
            <div class="form-group">
                    <label>State</Label>
                <input type="text" class="form-control {{ $errors->has('State') ? 'border-danger' : ''}}" name="State" id="State" placeholder="State" value="{{ old('State') ? old('State') : $customer->State }}">

            </div>
            <div class="form-group">
                    <label>ZIP</Label>
                <input type="text" class="form-control {{ $errors->has('ZIP') ? 'border-danger' : ''}}" name="ZIP" id="ZIP" placeholder="ZIP" value="{{ old('ZIP') ? old('ZIP') : $customer->ZIP }}">

            </div>
            <div class="form-group">
                    <label>Phone</Label>
                <input type="tel" class="form-control {{ $errors->has('Phone') ? 'border-danger' : ''}}" name="Phone" id="Phone" placeholder="Phone" value="{{ old('Phone') ? old('Phone') : $customer->Phone }}">

            </div>
            <div class="form-group">
                    <label>E-mail</Label>
                <input type="email" class="form-control {{ $errors->has('Email') ? 'border-danger' : ''}}" name="Email" id="Email" placeholder="E-Mail" value="{{ old('Email') ? old('Email') : $customer->Email }}">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Modify Customer</button>
                <hr>
                <a href="./../../customer/{{$customer->id}}/" class="btn btn-md btn-danger" role="button">Delete this customer</a>
            </div>
        </div>
    </form>
@endsection

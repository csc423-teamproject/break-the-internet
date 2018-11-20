@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h2>Modify Customer</h2>

    <form method="post" action="/customer/{{ $customer->CustomerId }}">
        @method('PATCH')
        @csrf
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
        <button type="submit" class="btn btn-primary">Modify Customer</button>

    </form>
    <hr />
    <p><a href="./../../customer/{{$customer->CustomerId}}/" class="btn btn-md btn-danger" role="button">Delete this customer</a></p>
@endsection

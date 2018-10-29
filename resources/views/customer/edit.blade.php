@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h2>Edit Customer</h2>

    <form method="post" action="/customer/{{ $customerData->CustomerId }}">
        @method('PATCH')
        @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="CustomerName" id="CustomerName" placeholder="Customer Name" value="{{ $customerData->CustomerName }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Address" id="Address" placeholder="Address" value="{{ $customerData->Address }}">

            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="City" id="City" placeholder="City" value="{{ $customerData->City }}">

            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="State" id="State" placeholder="State" value="{{ $customerData->State }}">

            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="ZIP" id="ZIP" placeholder="ZIP" value="{{ $customerData->ZIP }}">

            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Phone" value="{{ $customerData->Phone }}">

            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="Email" id="Email" placeholder="E-Mail" value="{{ $customerData->Email }}">

            </div>
        <button type="submit" class="btn btn-primary">Modify Customer</button>

    </form>
    <hr />
    <p><a href="./../../customer/{{$customerData->CustomerId}}/" class="btn btn-md btn-danger" role="button">Delete this customer</a></p>
@endsection

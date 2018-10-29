@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Add Customer</h1>
    <form action="/customer" method="post">
        @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="CustomerName" id="CustomerName" placeholder="Customer Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Address" id="Address" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="City" id="City" placeholder="City">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="State" id="State" placeholder="State">

            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="ZIP" id="ZIP" placeholder="ZIP">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Phone">

            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="Email" id="Email" placeholder="E-Mail">
            </div>
        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>
@endsection

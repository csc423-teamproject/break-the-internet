@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Add Customer</h1>
    <form action="/customer" method="post">
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->
            <div class="form-group">
                    <label>Customer Name</Label>
                <input type="text" class="form-control" name="CustomerName" id="CustomerName" placeholder="Customer Name">
            </div>
            <div class="form-group">
                    <label>Address</Label>
                <input type="text" class="form-control" name="Address" id="Address" placeholder="Address">
            </div>
            <div class="form-group">
                    <label>City</Label>
                <input type="text" class="form-control" name="City" id="City" placeholder="City">
            </div>
            <div class="form-group">
                    <label>State</Label>
                <input type="text" class="form-control" name="State" id="State" placeholder="State">

            </div>
            <div class="form-group">
                    <label>ZIP</Label>
                <input type="text" class="form-control" name="ZIP" id="ZIP" placeholder="ZIP">
            </div>
            <div class="form-group">
                    <label>Phone</Label>
                <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Phone">

            </div>
            <div class="form-group">
                    <label>E-mail</Label>
                <input type="email" class="form-control" name="Email" id="Email" placeholder="E-Mail">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Customer</button>
        
    </form>
@endsection

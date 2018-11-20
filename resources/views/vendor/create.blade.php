@extends('layouts.app')

@section('title', 'Vendor Maintenance')

@section('heading', 'Add Vendor')

@section('content')
    <form action="/vendor" method="post">
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->
            <div class="form-group">
                <label>Vendor Code</label>
                <input type="text" class="form-control {{ $errors->has('VendorCode') ? 'border-danger' : ''}}" name="VendorCode" id="VendorCode" placeholder="Vendor Code" value = "{{ old('VendorCode') }}">
                </div>
            <div class="form-group">
                <label>Vendor Name</label>
                <input type="text" class="form-control {{ $errors->has('VendorName') ? 'border-danger' : ''}}" name="VendorName" id="VendorName" placeholder="Vendor Name" value = "{{ old('VendorName') }}">
            </div>
            <div class="form-group">
                <label for="Address" class="col-form-label">Address</label>
                <input class="form-control {{ $errors->has('Address') ? 'border-danger' : ''}}"  type="text" name="Address" placeholder="Address" value="{{old('Address')}}">
            </div>
            <div class="form-group">
                <label for="City" class="col-form-label">City</label>
                <input class="form-control {{ $errors->has('City') ? 'border-danger' : ''}}"  type="text" name="City" placeholder="City" value="{{old('City')}}">
            </div>
            <div class="form-group">
                <label for="State" class="col-form-label">State</label>
                <input class="form-control {{ $errors->has('State') ? 'border-danger' : ''}}"  type="text" name="State" placeholder="State" value="{{old('State')}}">
            </div>
            <div class="form-group">
                <label for="ZIP" class="col-form-label">ZIP</label>
                <input class="form-control {{ $errors->has('ZIP') ? 'border-danger' : ''}}"  type="text" name="ZIP" placeholder="ZIP" value="{{old('ZIP')}}">
            </div>
            <div class="form-group">
                <label for="Phone" class="col-form-label">Phone</label>
                <input class="form-control {{ $errors->has('Phone') ? 'border-danger' : ''}}"  type="text" name="Phone" placeholder="Phone" value="{{old('Phone')}}">
            </div>
            <div class="form-group">
                <label>Contact Person</label>
                    <input type="text" class="form-control {{ $errors->has('ContactPersonName') ? 'border-danger' : ''}}" name="ContactPersonName" id="ContactPersonName" placeholder="Contact Person" value = "{{ old('ContactPersonName') }}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control {{ $errors->has('Password') ? 'border-danger' : ''}}" name="Password" id="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control {{ $errors->has('Password') ? 'border-danger' : ''}}" name="Password_confirmation" id="Password_confirmation" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Vendor</button>
            </div>
        </div>
    </form>
@endsection

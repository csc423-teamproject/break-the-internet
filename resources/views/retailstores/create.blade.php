@extends('layouts.app')

@section('title', 'Add Store Location')

@section('content')
    <h1>Add a new Retail Location</h1>

    <form method="post" action="/retailstores">
        @csrf
        <div class="form-group">
            <label for="StoreCode" class="col-form-label">Store Code</label>
            <input class="form-control {{ $errors->has('StoreCode') ? 'border-danger' : ''}}"  type="text" name="StoreCode" placeholder="Store Code" value="{{old('StoreCode')}}">
        </div>
        <div class="form-group">
            <label for="StoreName" class="col-form-label">Store Name</label>

            <input class="form-control {{ $errors->has('StoreName') ? 'border-danger' : ''}}"  type="text" name="StoreName" placeholder="Store Name" value="{{old('StoreName')}}">
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
            <label for="ManagerName" class="col-form-label">Manger Name</label>

            <input class="form-control {{ $errors->has('ManagerName') ? 'border-danger' : ''}}"  type="text" name="ManagerName" placeholder="Manager" value="{{old('ManagerName')}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Store Location</button>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>
@endsection



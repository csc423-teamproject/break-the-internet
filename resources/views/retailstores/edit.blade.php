@extends('layouts.app')

@section('title', 'Modify Store Location')

@section('heading', 'Modify Location')

@section('content')
    <form method="post" action="/retailstores/{{ $retailstore->id }}">
        @method('PATCH')
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->
            <div class="form-group">
                <label for="StoreCode" class="col-form-label">Store Code</label>
                <input type="text" class="form-control {{ $errors->has('StoreCode') ? 'border-danger' : ''}}" name="StoreCode" placeholder="Store Code" value="{{ old('StoreCode', $retailstore->StoreCode) }}">
            </div>
            <div class="form-group">
                <label for="StoreName" class="col-form-label">Store Name</label>
                <input type="text" class="form-control {{ $errors->has('StoreName') ? 'border-danger' : ''}}" name="StoreName" placeholder="Store Name" value="{{ old('StoreName') ? old('StoreName') : $retailstore->StoreName }}">
            </div>
            <div class="form-group">
                <label for="Address" class="col-form-label">Address</label>
                <input type="text" class="form-control {{ $errors->has('Address') ? 'border-danger' : ''}}" name="Address" placeholder="Address" value="{{ old('Address') ? old('Address') : $retailstore->Address }}">
            </div>
            <div class="form-group">
                <label for="City" class="col-form-label">City</label>
                <input type="text" class="form-control {{ $errors->has('City') ? 'border-danger' : ''}}" name="City" placeholder="City" value="{{ old('City') ? old('City') : $retailstore->City }}">
            </div>
            <div class="form-group">
                <label for="State" class="col-form-label">State</label>
                <input type="text" class="form-control {{ $errors->has('State') ? 'border-danger' : ''}}" name="State" placeholder="State" value="{{ old('State') ? old('State') : $retailstore->State }}">
            </div>
            <div class="form-group">
                <label for="ZIP" class="col-form-label">ZIP</label>
                <input type="text" class="form-control {{ $errors->has('ZIP') ? 'border-danger' : ''}}" name="ZIP" placeholder="ZIP" value="{{ old('ZIP') ? old('ZIP') : $retailstore->ZIP }}">
            </div>
            <div class="form-group">
                <label for="Phone" class="col-form-label">Phone</label>
                <input type="tel" class="form-control {{ $errors->has('Phone') ? 'border-danger' : ''}}" name="Phone" placeholder="Phone" value="{{ old('Phone') ? old('Phone') : $retailstore->Phone }}">
            </div>
            <div class="form-group">
                <label for="ManagerName" class="col-form-label">Manger Name</label>
                <input type="text" class="form-control {{ $errors->has('ManagerName') ? 'border-danger' : ''}}" name="ManagerName" placeholder="Manager" value="{{ old('ManagerName') ? old('ManagerName') : $retailstore->ManagerName }}">
            </div>
            {{--<div class="form-check">--}}
                {{--<input type="checkbox" class="form-check" name="ActiveStatus" value="ActiveStatus" >--}}
            {{--</div>--}}
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Location</button>
                <hr />
                <a href="/retailstores/{{$retailstore->id}}/" class="btn btn-md btn-danger" role="button">Delete this location</a>
            </div>
        </div>
    </form>
@endsection

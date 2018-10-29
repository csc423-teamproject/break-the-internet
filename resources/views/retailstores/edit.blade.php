@extends('layouts.app')

@section('title', 'Modify Store Location')

@section('content')
    <h1>Edit a Retail Location</h1>

    <form method="post" action="/retailstores/{{ $retailstore->StoreId }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="StoreCode" placeholder="Store Code" value="{{ $retailstore->StoreCode }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="StoreName" placeholder="Store Name" value="{{ $retailstore->StoreName }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Address" placeholder="Address" value="{{ $retailstore->Address }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="City" placeholder="City" value="{{ $retailstore->City }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="State" placeholder="State" value="{{ $retailstore->State }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="ZIP" placeholder="ZIP" value="{{ $retailstore->ZIP }}">
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" name="Phone" placeholder="Phone" value="{{ $retailstore->Phone }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="ManagerName" placeholder="Manager" value="{{ $retailstore->ManagerName }}">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check" name="ActiveStatus" value="ActiveStatus" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Store Location</button>

        </div>
    </form>
    <form method="post" action="/retailstores/{{ $retailstore->StoreId }}">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <button type="submit" class="btn btn-danger">Delete Store Location</button>
        </div>
    </form>
@endsection

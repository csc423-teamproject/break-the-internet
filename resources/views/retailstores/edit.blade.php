@extends('layouts.app')

@section('title', 'Modify Store Location')

@section('content')
    <h1>Modify Location</h1>

    <form method="post" action="/retailstores/{{ $retailstore->StoreId }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="StoreCode" class="col-form-label">Store Code</label>

            <input type="text" class="form-control" name="StoreCode" placeholder="Store Code" value="{{ $retailstore->StoreCode }}">
        </div>
        <div class="form-group">
            <label for="StoreName" class="col-form-label">Store Name</label>

            <input type="text" class="form-control" name="StoreName" placeholder="Store Name" value="{{ $retailstore->StoreName }}">
        </div>
        <div class="form-group">
            <label for="Address" class="col-form-label">Address</label>

            <input type="text" class="form-control" name="Address" placeholder="Address" value="{{ $retailstore->Address }}">
        </div>
        <div class="form-group">
            <label for="City" class="col-form-label">City</label>

            <input type="text" class="form-control" name="City" placeholder="City" value="{{ $retailstore->City }}">
        </div>
        <div class="form-group">
            <label for="State" class="col-form-label">State</label>

            <input type="text" class="form-control" name="State" placeholder="State" value="{{ $retailstore->State }}">
        </div>
        <div class="form-group">
            <label for="ZIP" class="col-form-label">ZIP</label>

            <input type="text" class="form-control" name="ZIP" placeholder="ZIP" value="{{ $retailstore->ZIP }}">
        </div>
        <div class="form-group">
            <label for="Phone" class="col-form-label">Phone</label>

            <input type="tel" class="form-control" name="Phone" placeholder="Phone" value="{{ $retailstore->Phone }}">
        </div>
        <div class="form-group">
            <label for="ManagerName" class="col-form-label">Manger Name</label>

            <input type="text" class="form-control" name="ManagerName" placeholder="Manager" value="{{ $retailstore->ManagerName }}">
        </div>
        {{--<div class="form-check">--}}
            {{--<input type="checkbox" class="form-check" name="ActiveStatus" value="ActiveStatus" >--}}
        {{--</div>--}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Location</button>

        </div>
    </form>
    <hr />
    <p><a href="./../../retailstores/{{$retailstore->StoreId}}/" class="btn btn-md btn-danger" role="button">Delete this location</a></p>
    {{--<form method="post" action="/retailstores/{{ $retailstore->StoreId }}">--}}
        {{--@method('DELETE')--}}
        {{--@csrf--}}
        {{--<div class="form-group">--}}
            {{--<button type="submit" class="btn btn-danger">Delete Store Location</button>--}}
        {{--</div>--}}
    {{--</form>--}}
@endsection

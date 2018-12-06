@extends('layouts.app')

@section('title', 'Item Maintenance')
@section('heading', 'Modify Item')
@section('content')
    <form method="post" action="/item/{{ $item->id }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->
            <div class="form-group">
                <label>Current Image:</label><br>
                <img class="img-thumbnail" src="{{ asset('storage/public/items/'. $item->ImageFileName) }}" width="200px" height="200px"/>

            </div>
            <div class="form-group">
                <label>Description</Label>
                <input type="text" class="form-control" name="Description" id="Description" value="{{ $item->Description }}">
            </div>
            <div class="form-group">
                    <label>Size</Label>
                <input type="text" class="form-control" name="Size" id="Size" value="{{ $item->Description }}">
            </div>
            <div class="form-group">
                    <label>Division</Label>
                    <select class="form-control" name="Division" id="Division">
                            @foreach($divisions as $divisions)
                            @if($divisions->ActiveStatus == 'Enabled')
                                <option value={{$divisions->id}} {{ $item->Division == $divisions->id ? "selected":""}}>{{$divisions->Division}}</option>
                            @endif
                        @endforeach
                    </select>
                <small><a href="/division/create/">Add division</a></small>
            </div>
            <div class="form-group">
                    <label>Department</Label>
                    <input type="text" class="form-control" name="Department" id="Department" value="{{ $item->Department }}">
            </div>
            <div class="form-group">
                    <label>Category</Label>
                        <select class="form-control" name="Category" id="Category">
                                @foreach($categories as $categories)
                                    @if($categories->ActiveStatus == 'Enabled')
                                        <option value={{$categories->id}} {{$item->Category == $categories->id ? "selected":""}}>{{$categories->Category}}</option>
                                    @endif
                            @endforeach
                        </select>
                        <small><a href="/category/create/">Add category</a></small>
            </div>
            <div class="form-group">
                    <label>Item Cost</Label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                <input type="text" class="form-control" name="ItemCost" id="ItemCost" value="{{ $item->ItemCost }}">
                </div>

            </div>
            <div class="form-group">
                    <label>Item Retail</Label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                <input type="text" class="form-control" name="ItemRetail" id="ItemRetail" value="{{ $item->ItemRetail }}">
                </div>
            </div>
            <div class="form-group">
                    <label>Image File Name</Label>
                <input type="file" class="form-control-file {{ $errors->has('ImageFileName') ? 'border-danger' : ''}}" name="ImageFileName" id="ImageFileName" value = "{{ $item->ImageFileName }}">

                {{--<input type="text" class="form-control" name="ImageFileName" id="ImageFileName" value="{{ $item->ImageFileName }}">--}}
            </div>
            <div class="form-group">
            <label>Vendor</Label>
                <select class="form-control" name="VendorId" id="VendorId">
                        @foreach($vendors as $vendor)
                            @if($vendor->ActiveStatus == 'Enabled')
                                    <option value={{$vendor->id}} {{$item->VendorId == $vendor->id ? "selected":""}}>{{$vendor->VendorName}}</option>
                            @endif
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Modify Item</button>
                <hr />
                <a href="/item/{{$item->id}}/" class="btn btn-md btn-danger" role="button">Delete this Item</a>
            </div>
        </div>
    </form>
@endsection

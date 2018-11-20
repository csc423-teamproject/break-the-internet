@extends('layouts.app')

@section('title', 'Item Maintenance')
@section('heading', 'Add Item')
@section('content')
    @if(count($vendors->where("ActiveStatus", 'Enabled')) == 0)
        <p>You must have vendors to enter an item</p>
    @else
    <form action="/item" method="post">
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->

            <div class="form-group">
                    <label>Description</Label>
                <input type="text" class="form-control {{ $errors->has('Description') ? 'border-danger' : ''}}" name="Description" id="Description" placeholder="Description" value = "{{ old('Description') }}">
            </div>
            <div class="form-group">
                    <label>Size</Label>
                <input type="text" class="form-control {{ $errors->has('Size') ? 'border-danger' : ''}}" name="Size" id="Size" placeholder="“2 liter”, “16 oz”, etc." value = "{{ old('Size') }}">
            </div>
            <div class="form-group">
                    <label>Division</Label>
                    <select class="form-control {{ $errors->has('Division') ? 'border-danger' : ''}}" name="Division" id="Division">
                            @foreach($divisions as $division)
                            @if($division->ActiveStatus == 'Enabled')
                                <option value={{$division->id}} {{ old('Division') == $division->id ? "selected":"" }}>{{$division->Division}}</option>
                            @endif
                        @endforeach
                    </select>
                <p><a href="/division/create/">Add division</a></p>
            </div>
            <div class="form-group">
                    <label>Department</Label>
                    <input type="text" class="form-control {{ $errors->has('Department') ? 'border-danger' : ''}}" name="Department" id="Department" placeholder="Department" value = "{{ old('Department') }}">
            </div>
            <div class="form-group">
                    <label>Category</Label>
                        <select class="form-control {{ $errors->has('Category') ? 'border-danger' : ''}}" name="Category" id="Category">
                                @foreach($categories as $category)
                                @if($category->ActiveStatus == 'Enabled')
                                    <option value={{$category->id}} {{ old('Category') == $category->id ? "selected":"" }}>{{$category->Category}}</option>
                                @endif
                            @endforeach
                        </select>
                        <p><a href="/category/create/">Add category</a></p>
            </div>
            <div class="form-group">
                    <label>Item Cost</Label>
                <input type="text" class="form-control {{ $errors->has('ItemCost') ? 'border-danger' : ''}}" name="ItemCost" id="ItemCost" placeholder="Item Cost" value = "{{ old('ItemCost') }}">

            </div>
            <div class="form-group">
                    <label>Item Retail</Label>
                <input type="text" class="form-control {{ $errors->has('ItemRetail') ? 'border-danger' : ''}}" name="ItemRetail" id="ItemRetail" placeholder="Item Retail" value = "{{ old('ItemRetail') }}">
            </div>
            <div class="form-group">
                    <label>Image File Name</Label>
                <input type="text" class="form-control {{ $errors->has('ImageFileName') ? 'border-danger' : ''}}" name="ImageFileName" id="ImageFileName" placeholder="Image File Name" value = "{{ old('ImageFileName') }}">
            </div>
            <div class="form-group">
            <label>Vendor</Label>
                <select class="form-control {{ $errors->has('VendorId') ? 'border-danger' : ''}}" name="VendorId" id="VendorId">
                        @foreach($vendors as $vendor)
                        @if($vendor->ActiveStatus == 'Enabled')
                            <option value={{$vendor->id}} {{ old('VendorId') == $vendor->id ? "selected":"" }}>{{$vendor->VendorName}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
        </div>
    </form>
    @endif
@endsection

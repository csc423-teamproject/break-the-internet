@extends('layouts.app')

@section('title', 'Item Maintenance')

@section('content')
    <h1>Add Item</h1>
    @if(count($vendorData->where("ActiveStatus", 'Enabled')) == 0)
        <p>You must have vendors to enter an item</p>
    @else
    <form action="/item" method="post">
        @csrf
            <div class="form-group">
                    <label>Description</Label>
                <input type="text" class="form-control" name="Description" id="Description" placeholder="Description">
            </div>
            <div class="form-group">
                    <label>Size</Label>
                <input type="text" class="form-control" name="Size" id="Size" placeholder="“2 liter”, “16 oz”, etc.">
            </div>
            <div class="form-group">
                    <label>Division</Label>
                    <select class="form-control" name="Division" id="Division">
                            @foreach($divisions as $divisions)
                            @if($divisions->ActiveStatus == 'Enabled')
                                <option value={{$divisions->DivisionId}}>{{$divisions->Division}}</option>
                            @endif
                        @endforeach
                    </select>
                <p><a href="./../division/create/">Add division</a></p>
            </div>
            <div class="form-group">
                    <label>Department</Label>
                    <input type="text" class="form-control" name="Department" id="Department" placeholder="Department">
            </div>
            <div class="form-group">
                    <label>Category</Label>
                        <select class="form-control" name="Category" id="Category">
                                @foreach($categories as $categories)
                                @if($categories->ActiveStatus == 'Enabled')
                                    <option value={{$categories->CategoryId}}>{{$categories->Category}}</option>
                                @endif
                            @endforeach
                        </select>
                        <p><a href="./../category/create/">Add category</a></p>
            </div>
            <div class="form-group">
                    <label>Item Cost</Label>
                <input type="text" class="form-control" name="ItemCost" id="ItemCost" placeholder="Item Cost">

            </div>
            <div class="form-group">
                    <label>Item Retail</Label>
                <input type="text" class="form-control" name="ItemRetail" id="ItemRetail" placeholder="Item Retail">
            </div>
            <div class="form-group">
                    <label>Image File Name</Label>
                <input type="text" class="form-control" name="ImageFileName" id="ImageFileName" placeholder="Image File Name">
            </div>
            <div>
            <label>Vendor</Label>
                <select class="form-control" name="VendorId" id="VendorId">
                        @foreach($vendorData as $vendorData)
                        @if($vendorData->ActiveStatus == 'Enabled')
                            <option value={{$vendorData->id}}>{{$vendorData->VendorName}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <br />
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
    @endif
@endsection

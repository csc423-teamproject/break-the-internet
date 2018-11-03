@extends('layouts.app')

@section('title', 'Item Maintenance')

@section('content')
    <h2>Edit Item</h2>

    <form method="post" action="/item/{{ $itemData->ItemId }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
                <label>Description</Label>
            <input type="text" class="form-control" name="Description" id="Description" value="{{ $itemData->Description }}">
        </div>
        <div class="form-group">
                <label>Size</Label>
            <input type="text" class="form-control" name="Size" id="Size" value="{{ $itemData->Description }}">
        </div>
        <div class="form-group">
                <label>Division</Label>
                <select class="form-control" name="Division" id="Division">
                        @foreach($divisions as $divisions)
                        @if($divisions->ActiveStatus == 'Enabled')
                            @if($itemData->Division == $divisions->DivisionId)
                                <option value={{$divisions->DivisionId}} SELECTED>{{$divisions->Division}}</option>
                            @else
                            <option value={{$divisions->DivisionId}}>{{$divisions->Division}}</option>
                            @endif
                        @endif
                    @endforeach
                </select>
            <p><a href="./../division/create/">Add division</a></p>
        </div>
        <div class="form-group">
                <label>Department</Label>
                <input type="text" class="form-control" name="Department" id="Department" value="{{ $itemData->Department }}">
        </div>
        <div class="form-group">
                <label>Category</Label>
                    <select class="form-control" name="Category" id="Category">
                            @foreach($categories as $categories)
                                @if($categories->ActiveStatus == 'Enabled')
                                    @if($itemData->Category == $categories->CategoryId)
                                        <option value={{$categories->CategoryId}} SELECTED>{{$categories->Category}}</option>
                                    @else
                                        <option value={{$categories->CategoryId}}>{{$categories->Category}}</option>
                                    @endif
                                @endif
                        @endforeach
                    </select>
                    <p><a href="./../category/create/">Add category</a></p>
        </div>
        <div class="form-group">
                <label>Item Cost</Label>
            <input type="text" class="form-control" name="ItemCost" id="ItemCost" value="{{ $itemData->ItemCost }}">

        </div>
        <div class="form-group">
                <label>Item Retail</Label>
            <input type="text" class="form-control" name="ItemRetail" id="ItemRetail" value="{{ $itemData->ItemRetail }}">
        </div>
        <div class="form-group">
                <label>Image File Name</Label>
            <input type="text" class="form-control" name="ImageFileName" id="ImageFileName" value="{{ $itemData->ImageFileName }}">
        </div>
        <div>
        <label>Vendor</Label>
            <select class="form-control" name="VendorId" id="VendorId">
                    @foreach($vendorData as $vendorData)
                        @if($vendorData->ActiveStatus == 'Enabled')
                            @if($itemData->VendorId == $vendorData->VendorId)
                                <option value={{$vendorData->VendorId}} SELECTED>{{$vendorData->VendorName}}</option>
                            @else
                                <option value={{$vendorData->VendorId}}>{{$vendorData->VendorName}}</option>
                            @endif
                        @endif
                    @endforeach
            </select>
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Modify Item</button>

    </form>
    <hr />
    <p><a href="./../../item/{{$itemData->ItemId}}/" class="btn btn-md btn-danger" role="button">Delete this Item</a></p>
@endsection
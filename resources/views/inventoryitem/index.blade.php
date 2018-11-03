@extends('layouts.app')

@section('title', 'Item Maintenance')

@section('content')
    <h2>Add/Modify/Delete Item</h2>
    <div class="col-md-6">
        @if(count($itemData->where("ActiveStatus", 'Enabled')) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for items...">
            <ul id="searchUL">
                @foreach($itemData as $itemData)
                    @if($itemData->ActiveStatus == 'Enabled')
                        <li><a href="./item/{{$itemData->ItemId}}/edit">{{$itemData->Description}}</a></li>
                    @endif
                @endforeach
            </ul>
        @else
            <p>No items found</p>
        @endif
        <hr />
        <p><a href="./item/create/" class="btn btn-md btn-primary" role="button">Add new item</a></p>
        </div>
@endsection
@extends('layouts.app')

@section('title', 'Item Maintenance')
@section('heading', 'Inventory Items')
@section('content')
    <div class="col-md-6">
        @if(count($items->where("ActiveStatus", 'Enabled')) >= 1)
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for items...">
            <ul id="searchUL">
                @foreach($items as $item)
                    @if($item->ActiveStatus == 'Enabled')
                        <li>
                            <a href="./item/{{$item->id}}/edit">
                                <img src="{{ asset('storage/public/items/'. $item->ImageFileName) }}" width="50px" height="50px"/>
                                {{$item->Description}}
                            </a>
                            {{--{{ storage_path('app/public/items/' . $item->ImageFileName) }}--}}

                        </li>
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

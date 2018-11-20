@extends('layouts.app')

@section('title', 'Return Maintenance')

@section('content')
<h2>Returns</h2>
<div class="col-md-6">
    @if(count($returnsData) >= 1)
        <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for orders...">
        <ul id="searchUL">
            @foreach($returnData as $returnData)
                <li><a href="./return/{{$returnData->id}}">{{$returnData->StoreName}} &#8594; {{$returnData->VendorName}}, ({{$returnData->id}})</a></li>
            @endforeach
        </ul>
    @else
        <p>No active returns</p>
    @endif
    <hr />
    <p><a href="./return/create/" class="btn btn-md btn-primary" role="button">Add return</a></p>
    </div>
@endsection

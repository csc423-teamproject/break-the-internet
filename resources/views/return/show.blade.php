@extends('layouts.app')

@section('title', 'Return Maintenance')

@section('content')
    <h1>Return: {{$returnData->ReturnToVendorId}}</h1>
    <h3>Vendor: {{$vendor->VendorName}}</h3>
    <h3>Store: {{$store->StoreName}}</h3>
    <hr />
    <br />
    <div class="col-md-6">
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for items...">
            <ul id="searchUL">
                @foreach($returnDetailData as $returnDetailData)
                            <li><a href="">{{$returnDetailData->Description}}, {{$returnDetailData->QuantityReturned}}</a></li>
                @endforeach
            </ul>
        <hr />
        <p><a href="./{{$returnData->ReturnToVendorId}}/edit" class="btn btn-md btn-primary" role="button">Add new item</a></p>
        <form method='POST' action="/return/{{ $returnData->ReturnToVendorId }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Complete return</button>
        </form>
        </div>
@endsection
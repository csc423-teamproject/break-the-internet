@extends('layouts.app')

@section('title', 'Return Maintenance')
@section('heading', 'Order Return')
@section('content')
    <div class="alert alert-primary">
        <h3>Return: {{$returnData->id}}</h3>
        <h3>Vendor: {{$vendor->VendorName}}</h3>
        <h3>Store: {{$store->StoreName}}</h3>
    </div>

    <hr />
    <div class="col-md-6">
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for items...">
            <ul id="searchUL">
                @foreach($returnDetailData as $returnDetailData)
                            <li><a href="">{{$returnDetailData->Description}}, {{$returnDetailData->QuantityReturned}}</a></li>
                @endforeach
            </ul>
        <hr />
        <p><a href="./{{$returnData->ReturnToVendorId}}/edit" class="btn btn-md btn-primary" role="button">Add new item</a></p>
        <form method='POST' action="/return/{{ $returnData->id }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Complete return</button>
        </form>
        </div>
@endsection

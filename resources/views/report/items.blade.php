@extends('layouts.app')

@section('title', 'Report')

@section('content')
    <h3>All Items</h3>
    <input type="text" id="tableInput" onkeyup="tableSearchFunction()" placeholder="Search for items..">
    <table id="searchTable">
            <tr>
                    <th class="reportTableH">Id</th>
                    <th class="reportTableH">Description</th>
                    <th class="reportTableH">Store</th>
                    <th class="reportTableH">Quantity In Stock</th>
                </tr>
                @foreach($data as $data)
                <tr>
                <td class="reportTableD">{{$data->ItemId}}</td>
                <td class="reportTableD">{{$data->Description}}</td>
                <td class="reportTableD">{{$data->StoreName}}</td>
                <td class="reportTableD">{{$data->QuantityInStock}}</td>
                </tr>
                @endforeach
</table>
@endsection
@extends('layouts.app')

@section('title', 'Report')
@section('heading', 'All Items')
@section('content')
    <input type="text" id="tableInput" class="tableInput" onkeyup="tableSearchFunction()" placeholder="Search for items..">
    <input type="text" id="tableStoreInput" class="tableInput" onkeyup="tableSearchFunction()" placeholder="Search on stores..">
    <input type="text" id="tableQuantityInput" class="tableInput" onkeyup="tableSearchFunction()" placeholder="Quantity threshold..">
    <table id="searchTable">
            <tr>
                    <th>Id</th>
                    <th>Item</th>
                    <th>Store</th>
                    <th>Quantity In Stock</th>
                </tr>
                @foreach($data as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->Description}}</td>
                <td>{{$data->StoreName}}</td>
                <td>{{$data->QuantityInStock}}</td>
                </tr>
                @endforeach
</table>

@endsection

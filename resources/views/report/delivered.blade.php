@extends('layouts.app')

@section('title', 'Report')
@section('heading', 'Delivered Items')

@section('content')

<input type="date" id="start" value="{{ $week }}" name="start" onchange="deliveredSearch()"> -
<input type="date" id="end" value="{{ $today }}" name="end" onchange="deliveredSearch()">
<hr />
<input type="text" id="store" class="tableInput" onkeyup="deliveredSearch()" placeholder="Search on stores..">
<input type="text" id="vendor" class="tableInput" onkeyup="deliveredSearch()" placeholder="Search on vendors..">

<table id="deliveredTable">
        <tr>
                <th>Date and Time</th>
                <th>Store</th>
                <th>Vendor</th>
                <th>Id</th>
            </tr>
            @foreach($data as $data)
            <tr>
            <td>{{$data->DateTimeOfFulfilment}}</td>
            <td>{{$data->StoreName}}</td>
            <td>{{$data->VendorName}}</td>
            <td><a href="/order/{{$data->id}}">{{$data->id}}</a></td>
            </tr>
            @endforeach
</table>

<script>deliveredSearch()</script>

@endsection

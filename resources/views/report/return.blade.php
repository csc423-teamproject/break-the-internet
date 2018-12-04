@extends('layouts.app')

@section('title', 'Report')

@section('content')


<form action="/returned" method="post">
    @csrf
    <input type="date" id="start" value="{{ $month }}" name="start"> -
    <input type="date" id="end" value="{{ $today }}" name="end">
    <button type="submit" class="btn btn-primary">Change Dates</button>
</form>
<hr>
<input type="text" id="returnInput" class="tableInput" onkeyup="returnSearch()" placeholder="Search for items..">

<table id="returnTable">
        <tr>
                <th>Number of Returned Items</th>
                <th>Item</th>
            </tr>
            @foreach($data as $data)
            <tr>
            <td>{{$data->count}}</td>
            <td>{{$data->Description}}</td>
            </tr>
            @endforeach
</table>

@endsection
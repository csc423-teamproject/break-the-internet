@extends('layouts.app')

@section('title', 'Portal')

@section('content')
    <h3>{{$id}}</h3>
    <table>
        <tr>
            <th>Item</th>
            <th>Quantity</th>
        </tr>
        @foreach($items as $items)
        <tr>
                <td>{{$items->Description}}</td>
                <td>{{$items->QuantityOrdered}}</td>
        </tr>
        @endforeach
    </table>
@endsection
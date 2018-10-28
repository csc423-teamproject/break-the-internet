@extends('layouts.app')

@section('title', 'Store Location Maintenance')

@section('content')
    <h1>My Retail Stores</h1>
    <ul>
        @foreach($stores as $store)
            <li>{{ $store->StoreName }}</li>
        @endforeach
    </ul>
@endsection

@extends('layouts.app')

@section('title', 'Delete Retail Location')

@section('heading', 'Are you sure you want to remove this location?')

@section('content')
    <div class="alert alert-info">
        <h4>Store Code: {{ $retailstore->StoreCode }}</h4><br>
        <h4>Store Name: {{ $retailstore->StoreName }}</h4>
    </div>
    <div class="form-inline">
        <form method='POST' action="/retailstores/{{ $retailstore->id }}">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/retailstores" class="btn btn-primary">No</a>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Item Maintenance')
@section('heading', 'Are you sure you want to delete this item?')
@section('content')
    <div class="alert alert-info">
        <h4>Description: {{ $item->Description }}</h4><br>
    </div>
    <div class="form-inline">
        <form method='POST' action="/item/{{ $item->id }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/item" class="btn btn-primary">No</a>
        </form>
    </div>
@endsection

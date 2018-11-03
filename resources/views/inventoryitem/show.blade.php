@extends('layouts.app')

@section('title', 'Item Maintenance')

@section('content')
    <h1>Are you sure you want to delete this item?</h1>
    <div class="form-inline">
        <form method='POST' action="/item/{{ $itemData->ItemId }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/item" class="btn btn-primary">No</a>
        </form>
    </div>
@endsection
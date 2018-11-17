@extends('layouts.app')

@section('title', 'Show Retail Store')

@section('content')
    <h1>Are you sure you want to delete this location?</h1>
    <div class="form-inline">
        <form method='POST' action="/retailstores/{{ $retailStore->StoreId }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/retailstores" class="btn btn-primary">No</a>
        </form>
    </div>
@endsection

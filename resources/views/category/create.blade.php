@extends('layouts.app')

@section('title', 'Category Maintenance')

@section('content')
    <h1>Add Category</h1>
    <form action="/category" method="post">
        @csrf
            <div class="form-group">
                    <label>Category</Label>
                <input type="text" class="form-control" name="Category" id="Category" placeholder="Category">
            </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection
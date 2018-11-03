@extends('layouts.app')

@section('title', 'Division Maintenance')

@section('content')
    <h1>Add Division</h1>
    <form action="/division" method="post">
        @csrf
            <div class="form-group">
                    <label>Division</Label>
                <input type="text" class="form-control" name="Division" id="Division" placeholder="Division">
            </div>
        <button type="submit" class="btn btn-primary">Add Division</button>
    </form>
@endsection
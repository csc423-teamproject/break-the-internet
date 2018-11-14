@extends('layouts.app')

@section('title', 'Customer Maintenance')

@section('content')
    <h1>Delivery</h1>
    <form action="/delivery" method="post">
        @csrf
            <div class="form-group">
                    <label>Order Number</Label>
                <input type="text" class="form-control" name="OrderNumber" id="OrderNumber" placeholder="OrderNumber">
        <br />
                          <button type="submit" class="btn btn-primary">Deliver</button>
                        </div>  
    </form>
@endsection

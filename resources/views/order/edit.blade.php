@extends('layouts.app')

@section('title', 'Order Maintenance')
@section('heading', 'Add item to Order')
@section('content')
    <form method="post" action="/order/{{ $orderData->id }}">
        @method('PATCH')
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->

            <div class="form-group">
                    <label>Item</Label>
                        <select class="form-control" name="ItemId" id="ItemId">
                            @foreach($items as $item)
                                    <option value={{$item->id}}>{{$item->Description}}</option>
                            @endforeach
                        </select>
                    <label>Quantity</label>
                    <input type="text" class="form-control" name="Quantity" id="Quantity" placeholder="Quantity">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
        </div>
    </form>


@endsection

@extends('layouts.app')

@section('title', 'Purchase Maintenance')
@section('heading', 'Add Purchase')

@section('content')
    <form action="/purchase/{{ $store }}" method="post">
        @method('PATCH')
        @csrf
            <input type="hidden" name="StoreId" id="StoreId" value="{{ $store }}">
        <div>
            <label>Customer Id</label>
            <input type="text" class="form-control" name="CustomerId" id="CustomerId" placeholder="">
        </div>
        <div>
            <label>Item</Label>
                <select class="form-control" name="ItemId" id="ItemId">
                        @foreach($items as $items)
                                <option value={{$items->id}}>{{$items->Description}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="QuantityPurchased" id="QuantityPurchased" placeholder="">
                    </div>
                <br />
        <button type="submit" class="btn btn-primary">Complete Purchase</button>
    </form>
@endsection

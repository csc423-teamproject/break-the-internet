@extends('layouts.app')

@section('title', 'Purchase Maintenance')

@section('content')
    <h1>Add Purchase</h1>
    <form action="/purchase" method="post">
        @csrf
        <div>
            <label>Store</Label>
                <select class="form-control" name="StoreId" id="StoreId">
                        @foreach($storeData as $store)
                            @if($store->ActiveStatus == 'Enabled')
                                <option value={{$store->id}}>{{$store->StoreName}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <br />
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
@endsection

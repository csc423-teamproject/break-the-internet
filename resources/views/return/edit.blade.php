@extends('layouts.app')

@section('title', 'Return Maintenance')

@section('content')

<h2>Add item to return</h2>
    <form method="post" action="/return/{{ $returnData->ReturnToVendorId }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
                <label>Item</Label>
                    <select class="form-control" name="ItemId" id="ItemId">
                        @foreach($items as $items)
                                <option value={{$items->ItemId}}>{{$items->Description}}</option>
                        @endforeach
                    </select>
                <label>Quantity</label>
                <input type="text" class="form-control" name="Quantity" id="Quantity" placeholder="Quantity">
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>


@endsection
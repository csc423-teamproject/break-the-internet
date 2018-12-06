@extends('layouts.app')

@section('title', 'Return Maintenance')
@section('heading', 'Add Items to Return')

@section('content')
    <form method="post" action="/return/{{ $returnData->id }}">
        @method('PATCH')
        @csrf
        <div class="row">
            <label class="col">Item</Label>
            <label class="col">Quantity</label>

        </div>
        <div class="row">
            <select class="col" name="ItemId" id="ItemId">
                        @foreach($items as $item)
                                <option value={{$item->id}}>{{$item->Description}}</option>
                        @endforeach
                    </select>
                <input type="text" class="col" name="Quantity" id="Quantity" placeholder="Quantity">
            <button type="submit" class="col btn btn-primary">Add Item</button>

        </div>
        <br />
    </form>


@endsection

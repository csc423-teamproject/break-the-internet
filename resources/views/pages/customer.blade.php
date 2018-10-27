@extends('layouts.app')

@section('content')
    <h1>Add/Modify/Delete Customer</h1>
    @if(count($customerData) > 1)
        @foreach($customerData as $customerData)
            <div>
                <p>{{$customerData}}</p>
            </div>
        @endforeach
        @else
            <p>No customers found</p>
        @endif
        <hr />
    <form action="store" method="post">
        <label for="">Name</label>
        <input type="text" name="CustomerName" value="">
        <label for="">Address</label>
        <input type="text" name="CustomerAddress" value="">
        <label for="">City</label>
        <input type="text" name="City" value="">
        <label for="">State</label>
        <input type="text" name="StateCode" value="" maxlength="2">
        <label for="">ZIP</label>
        <input type="text" name="ZIP" value="" maxlength="5">
        <label for="">Phone</label>
        <input type="text" name="Phone" value="">
        <label for="">Email</label>
        <input type="text" name="email" value="">

        <input type="submit" name="submit" value="submit">
    </form>
@endsection
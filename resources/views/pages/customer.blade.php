@extends('layouts.app')

@section('content')
    <h1>Add Customer</h1>
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
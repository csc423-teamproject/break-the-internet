@extends('layouts.app')

@section('content')
    <h1>Add Vendor</h1>
    <form action="store" method="post">
        <label for="">Name</label>
        <input type="text" name="VendorName" value="">
        <label for="">Address</label>
        <input type="text" name="VendorAddress" value="">
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
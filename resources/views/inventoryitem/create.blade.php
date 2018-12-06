@extends('layouts.app')

@section('title', 'Item Maintenance')
@section('heading', 'Add Item')
@section('content')
    <script>
        // document.getElementById("ImageFileName").onchange = function () {
        //     var reader = new FileReader();
        //
        //     reader.onload = function (e) {
        //         // get loaded data and render thumbnail.
        //         document.getElementById("image").src = e.target.result;
        //     };
        //
        //     // read the image file as a data URL.
        //     reader.readAsDataURL(this.files[0]);
        // };

        function handleFileSelect(evt) {
            var files = evt.target.files; // FileList object

            // files is a FileList of File objects. List some properties.
            var output = [];
            for (var i = 0, f; f = files[i]; i++) {
                output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                    f.size, ' bytes, last modified: ',
                    f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                    '</li>');
            }
            document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
        }

        document.getElementById('files').addEventListener('change', handleFileSelect, false);
    </script>
    @if(count($vendors->where("ActiveStatus", 'Enabled')) == 0)
        <p>You must have vendors to enter an item</p>
    @else
    <form action="/item" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-sm p-3 m-2"> <!-- Adjust this -->

            <div class="form-group">
                    <label>Description</Label>
                <input type="text" class="form-control {{ $errors->has('Description') ? 'border-danger' : ''}}" name="Description" id="Description" placeholder="Description" value = "{{ old('Description') }}">
            </div>
            <div class="form-group">
                    <label>Size</Label>
                <input type="text" class="form-control {{ $errors->has('Size') ? 'border-danger' : ''}}" name="Size" id="Size" placeholder="“2 liter”, “16 oz”, etc." value = "{{ old('Size') }}">
            </div>
            <div class="form-group">
                    <label>Division</Label>
                    <select class="form-control {{ $errors->has('Division') ? 'border-danger' : ''}}" name="Division" id="Division">
                            @foreach($divisions as $division)
                            @if($division->ActiveStatus == 'Enabled')
                                <option value={{$division->id}} {{ old('Division') == $division->id ? "selected":"" }}>{{$division->Division}}</option>
                            @endif
                        @endforeach
                    </select>
                <small><a href="/division/create/">Add division</a></small>
            </div>
            <div class="form-group">
                    <label>Department</Label>
                    <input type="text" class="form-control {{ $errors->has('Department') ? 'border-danger' : ''}}" name="Department" id="Department" placeholder="Department" value = "{{ old('Department') }}">
            </div>
            <div class="form-group">
                    <label>Category</Label>
                        <select class="form-control {{ $errors->has('Category') ? 'border-danger' : ''}}" name="Category" id="Category">
                                @foreach($categories as $category)
                                @if($category->ActiveStatus == 'Enabled')
                                    <option value={{$category->id}} {{ old('Category') == $category->id ? "selected":"" }}>{{$category->Category}}</option>
                                @endif
                            @endforeach
                        </select>
                        <small><a href="/category/create/">Add category</a></small>
            </div>
            <div class="form-group">
                <label>Item Cost</Label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('ItemCost') ? 'border-danger' : ''}}" name="ItemCost" id="ItemCost" placeholder="Item Cost" value = "{{ old('ItemCost') }}">
                </div>
            </div>
            <div class="form-group">
                <label>Item Retail</Label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('ItemRetail') ? 'border-danger' : ''}}" name="ItemRetail" id="ItemRetail" placeholder="Item Retail" value = "{{ old('ItemRetail') }}">
                </div>
            </div>
            <div class="form-group">
                <label>Image File Name</Label>
                <style>

                </style>
                <input type="file" class="form-control-file {{ $errors->has('ImageFileName') ? 'border-danger' : ''}}" name="ImageFileName" id="ImageFileName" value = "{{ old('ImageFileName') }}">
{{--                <input type="file" class="form-control {{ $errors->has('ImageFileName') ? 'border-danger' : ''}}" name="ImageFileName" id="ImageFileName" placeholder="Image File Name" value = "{{ old('ImageFileName') }}">--}}
                {{--<img id="image"/>--}}
                {{--<output id="list"></output>--}}
            </div>
            <div class="form-group">
            <label>Vendor</Label>
                <select class="form-control {{ $errors->has('VendorId') ? 'border-danger' : ''}}" name="VendorId" id="VendorId">
                        @foreach($vendors as $vendor)
                        @if($vendor->ActiveStatus == 'Enabled')
                            <option value={{$vendor->id}} {{ old('VendorId') == $vendor->id ? "selected":"" }}>{{$vendor->VendorName}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
        </div>
    </form>
    @endif
@endsection

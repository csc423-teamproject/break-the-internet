<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        
        {{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <script type="text/javascript" src="{{ URL::asset('js/layout.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" />
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">close</a>
            <a href="{{ url('customer') }}">
                <i class="material-icons">group</i>
                Customers
            </a>
            <a href="{{ url('retailstores') }}">
                <i class="material-icons">store</i>
                Store Locations
            </a>
            <a href="{{ url('item') }}">
                <i class="material-icons">poll</i>
                Inventory
            </a>
            <a href="{{ url('vendor') }}">
                <i class="material-icons">perm_contact_calendar</i>
                Vendors
            </a>
            <a href="{{ url('order') }}">
                <i class="material-icons">shopping_cart</i>
                Orders
            </a>
            <a href="{{ url('return') }}">
                <i class="material-icons">assignment_returned</i>
                Returns
            </a>
            <a class="nav-link active" href="{{ url('/') }}">
                <i class="material-icons">subdirectory_arrow_left</i>
                Exit
            </a>
        </div>
        <div id="main">
            <img src="{{ asset('images/Nannos-alpha.png') }}" class=.img-responsive 
                onclick="openNav()" style="cursor:pointer">
                @yield('content')
        </div>
    </body>
</html>

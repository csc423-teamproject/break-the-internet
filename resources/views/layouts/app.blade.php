<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/layout.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="container-fluid">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-left"><img src="{{ asset('images/Nannos-alpha.png') }}" class=.img-responsive></a>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-md-block bg-light sidebar">
                    <div class="sidebar-sticky" style="height:100%;">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('customer') }}">
                                <span class="glyphicon glyphicon-user"></span>
                                Customers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('retailstores') }}">
                                <span class="glyphicon glyphicon-credit-card"></span>
                                Store Locations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('item') }}">
                                <span class="glyphicon glyphicon-tags"></span>
                                Inventory
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('vendor') }}">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                Vendors
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('order') }}">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}">
                                <span class="glyphicon glyphicon-home"></span>
                                Exit
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col-md-9 content">
                @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
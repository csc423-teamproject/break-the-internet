<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div class="row">  <!--  -->
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky" style="height:100%;">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}">
                                <span class="glyphicon glyphicon-home"></span>
                                Main
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span class="glyphicon glyphicon-user"></span>
                                Customers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                Vendors
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span class="glyphicon glyphicon-tags"></span>
                                Inventory
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
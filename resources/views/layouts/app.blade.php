<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        -->
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

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
                document.body.style.backgroundColor = "white";
            }
        </script>

        <!-- Using CSS from W3Schools example - can we stick this
             and the script function above into either resource or
             cs/jss folders?
        -->
        <style>
            body {
                font-family: sans-serif;
                transition: background-color .5s;
                background-image: url( {{ asset('images/NannosBG.png')}} );
                background-repeat: no-repeat;
                background-position: right bottom;
                background-attachment: fixed;
            }

            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            #main {
                transition: margin-left .5s;
                padding: 16px;
            }

            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }
        </style>
       
        <title>@yield('title')</title>
    </head>
    <body>

    <!---
        <nav class="container-fluid">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-left"><img src="{{ asset('images/Nannos-alpha.png') }}" class=.img-responsive></a>
                </div>
            </div>
        </nav>
    -->

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="{{ url('customer') }}">
                        <i class="material-icons">group</i>
                        Customers
                    </a>
                    <a  href="{{ url('retailstores') }}">
                        <i class="material-icons">shopping_cart</i>
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
                    <a class="nav-link active" href="{{ url('/') }}">
                        <i class="material-icons">subdirectory_arrow_left</i>
                        Exit
                    </a>
                </div>

                <div id="main">
                    <img src="{{ asset('images/Nannos-alpha.png') }}" class=.img-responsive onclick="openNav()">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
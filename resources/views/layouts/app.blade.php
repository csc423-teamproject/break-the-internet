<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>@yield('title')</title>
        <style>
            * {
              box-sizing: border-box;
            }
            
            #searchInput {
              /*background-image: url('/css/searchicon.png');*/
              background-position: 10px 12px;
              background-repeat: no-repeat;
              width: 100%;
              font-size: 16px;
              padding: 12px 20px 12px 40px;
              border: 1px solid #ddd;
              margin-bottom: 12px;
            }
            
            #searchUL {
              list-style-type: none;
              padding: 0;
              margin: 0;
            }
            
            #searchUL li a {
              border: 1px solid #ddd;
              margin-top: -1px; /* Prevent double borders */
              background-color: #f6f6f6;
              padding: 12px;
              text-decoration: none;
              font-size: 18px;
              color: black;
              display: block
            }
            
            #searchUL li a:hover:not(.header) {
              background-color: #eee;
            }
            </style>
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
                                <a class="nav-link" href="#">
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


        <script>
            function searchFunction() {
                var input, filter, ul, li, a, i;
                input = document.getElementById("searchInput");
                filter = input.value.toUpperCase();
                ul = document.getElementById("searchUL");
                li = ul.getElementsByTagName("li");
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
            }
            </script>
    </body>
</html>

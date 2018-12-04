<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        
        <!-- Bulma --> 
        {{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}
        
        <!-- Popper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <!-- Google Material Design iconography -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Our stuff -->
        <script type="text/javascript" src="{{ URL::asset('js/layout.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" />
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Nannos Food')</title>
    </head>
    <body>
        <!-- Sidebar navigation-->
        <div id="mySidenav" class="sidenav">

            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">close</a> -->

            <a class="material-icons" onclick="openNav()" style="cursor:pointer" 
                id="burger" data-toggle="tool-tip" title="Open/Close Menu">menu</a>

            <a href="{{ url('landing') }}" data-toggle="tool-tip" title="Home">                
                <img class="navtext" style="display: none; padding-right: 30px;" src="{{ asset('images/nannos_menu_icon.png') }}">
                <img id="navlogo" style="display: inline;" src="{{ asset('images/Nannos_N_Icon.png') }}">
            </a>
            <a href="{{ url('customer') }}" data-toggle="tool-tip" title="Customers">                
                <span class="navtext" style="display: none;">Customers</span>
                    <i class="material-icons">group</i>
            </a>
            <a href="{{ url('retailstores') }}" data-toggle="tool-tip" title="Store Locations"> 
                <span class="navtext" style="display: none;">Store Locations</span>
                <i class="material-icons">store</i>
            </a>
            <a href="{{ url('item') }}" data-toggle="tool-tip" title="Inventory">
                <span class="navtext" style="display: none;">Inventory</span>
                <i class="material-icons">poll</i>
            </a>
            <a href="{{ url('vendor') }}" data-toggle="tool-tip" title="Vendors">
                <span class="navtext" style="display: none;">Vendors</span>
                <i class="material-icons">perm_contact_calendar</i>
            </a>
            <a href="{{ url('order') }}" data-toggle="tool-tip" title="Orders">
                <span class="navtext" style="display: none;">Orders</span>
                <i class="material-icons">shopping_cart</i>
            </a>
            <a href="{{ url('return') }}" data-toggle="tool-tip" title="Returns">
                <span class="navtext" style="display: none;">Returns</span>
                <i class="material-icons">assignment_returned</i>
            </a>
            <a href="{{ url('purchase') }}" data-toggle="tool-tip" title="Purchases">
                <span class="navtext" style="display: none;">Purchases</span>
                <i class="material-icons">shop_two</i>
            </a>
            <a href="{{ url('report') }}" data-toggle="tool-tip" title="Reports">
                <span class="navtext" style="display: none;">Reports</span>
                <i class="material-icons">description</i>
            </a>
            <a class="nav-link active" href="{{ url('/') }}" data-toggle="tool-tip" title="Logout">
                <span class="navtext" style="display: none;">Logout</span>
                <i class="material-icons">subdirectory_arrow_left</i>
            </a>
        </div>
        <!-- End of Sidebar -->

        <!-- Main body -->
        <div id="main">
            
            <h2>@yield('heading')</h2>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show w-25" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('status') }}
                </div>
            @endif
            @yield('content')
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <!-- ENd of Main -->
    </body>
</html>

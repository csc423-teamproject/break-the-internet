<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', 'Nanno\'s Food')</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">--}}
    <!-- Our Stuff -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/layout.js') }}"></script>

    <!-- Google Material Design iconography -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Nanno's Foods</h3>
            <strong>NF</strong>

        </div>

        <ul class="list-unstyled components">
            <li class="{{ Request::is('customer') ? 'active' : '' }}">
                <a href="{{ url('customer') }}" data-toggle="tool-tip" title="Customers">
                    <i class="material-icons">group</i>
                    <span class="navtext">Customers</span>
                </a>
            </li>
            <li class="{{ Request::is('retailstores') ? 'active' : '' }}">
                <a href="{{ url('retailstores') }}" data-toggle="tool-tip" title="Store Locations">
                    <i class="material-icons">store</i>
                    <span class="navtext">Store Locations</span>
                </a>
            </li>
            <li class="{{ Request::is('item') ? 'active' : '' }}">
                <a href="{{ url('item') }}" data-toggle="tool-tip" title="Inventory">
                    <i class="material-icons">poll</i>
                    <span class="navtext">Inventory</span>
                </a>
            </li>
            <li class="{{ Request::is('vendor') ? 'active' : '' }}">
                <a href="{{ url('vendor') }}" data-toggle="tool-tip" title="Vendors">
                    <i class="material-icons">perm_contact_calendar</i>
                    <span class="navtext">Vendors</span>
                </a>

            </li>
            <li class="{{ Request::is('order') ? 'active' : '' }}">
                <a href="{{ url('order') }}" data-toggle="tool-tip" title="Orders">
                    <i class="material-icons">shopping_cart</i>
                    <span class="navtext">Orders</span>
                </a>
            </li>
            <li class="{{ Request::is('return') ? 'active' : '' }}">
                <a href="{{ url('return') }}" data-toggle="tool-tip" title="Returns">
                    <i class="material-icons">assignment_returned</i>
                    <span class="navtext">Returns</span>
                </a>
            </li>
            <li class="{{ Request::is('purchase') ? 'active' : '' }}">
                <a href="{{ url('purchase') }}" data-toggle="tool-tip" title="Purchases">
                    <i class="material-icons">shop_two</i>
                    <span class="navtext" >Purchases</span>
                </a>
            </li>
            <li class="{{ Request::is('report') ? 'active' : '' }}">
                <a href="{{ url('report') }}" data-toggle="tool-tip" title="Reports">
                    <i class="material-icons">description</i>
                    <span class="navtext" >Reports</span>
                </a>
            </li>
            <li >
                <a class="nav-link active" href="{{ url('/') }}" data-toggle="tool-tip" title="Logout">
                    <i class="material-icons">subdirectory_arrow_left</i>

                    <span class="navtext">Logout</span>
                </a>
            </li>
        </ul>

        {{--<ul class="list-unstyled CTAs">--}}
            {{--<li>--}}
                {{--<a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <h2>@yield('heading')</h2>
                <a href="{{ url('landing') }}" data-toggle="tool-tip" title="Home">
                    <img class="navtext" style="display: inline; padding-right: 30px;" src="{{ asset('images/nannos_menu_icon.png') }}">
                    {{--<img id="navlogo" style="display: inline;" src="{{ asset('images/Nannos_N_Icon.png') }}">--}}
                </a>
            </div>
        </nav>


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
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>--}}

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
</body>

</html>

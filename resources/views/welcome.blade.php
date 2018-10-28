<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript">
            function goesNowhere(){
                alert("We haven't built the Vendor pages yet. Nothing to see here.");
            }
        </script>
        <title>Nanno's Foods - Welcome!</title>

        <!-- Fonts -->
            <!--
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
            -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
           /* Any other style information we want goes here - JVH */
        </style>
    </head>
    <body>
        <!--  We might use this later... JVH
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Break-The-Internet
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        -->
        <div class="container"> 
            <div class="jumbotron jumbotron-fluid">
                <center><img src="{{ asset('images/Nannos-full.png') }}" class=".img-responsive" alt="Nanno's Foods"></center>
            </div>
        </div>

        <div class="container"><center>
            <!--These buttons can be linked to the routes for Manager and Vendor Views-->
            <p><a href="{{ url('landing') }}" type="button" class="btn-lg" role="button">Manager</a></p>
            <p><a type="button" class="btn-lg" role="button" onclick="goesNowhere()">Vendor</a></p> 
        </center>
        </div>
    </body>
</html>

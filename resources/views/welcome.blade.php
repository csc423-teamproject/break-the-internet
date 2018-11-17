<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nanno's Foods - Welcome!</title>

        <script type="text/javascript" src="{{ URL::asset('js/welcome.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />

    </head>
    <body>
        <div class="hero-image">
            <div class="hero-text">
            <h1>Nanno's Foods</h1>
            <p>Welcome to Nanno Food's Online Management System</p>
            <button onclick="document.getElementById('id01').style.display='block'">Login</button>
            </div>
        </div>
        <!-- The Modal -->
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" 
                class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="{{ url('landing') }}">
                <div class="imgcontainer">
                    <!-- WE NEED TO CHANGE THIS IMAGE!! This was 'borrowed' as a placeholder... -->
                    <img src="{{ asset('images/img_avatar2.png') }}" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <!-- Do we want to build a 'forgot password' utility?
                <span class="psw">Forgot <a href="#">password?</a></span>
                -->
                </div>
            </form>
        </div> 
    </body>
</html>

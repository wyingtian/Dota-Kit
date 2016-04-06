<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dota2 Kits</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    @yield('head')
</head>
<body>

<header class="header-basic-light">
    <div class="header-limiter">
        <h1><a href="/"><span>Dota2 Kits</span></a></h1>
        <nav>
            <a href="/login"> Log In </a>
            <a href="/Singup">Sign Up</a>
        </nav>
    </div>

</header>
<div class="container ">
    @yield('content')
</div>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                &copy; {{ date('Y') }} &nbsp;&nbsp; <a href="http://www.yingtian.me">www.yingtian.me</a>
            </div>
        </div>
    </div>
</footer>


</body>
<script src="js/app.js"></script>



</html>

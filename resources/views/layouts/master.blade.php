<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('/img/favicon.ico')}}">

    <title>@yield('title')</title>


    <!-- CSS Global -->

    {!! HTML::style('css/all.css') !!}
    @yield('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Navbar
============= -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Congres Technische Bedrijfskunde</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ set_active('/') }}"><a href="/">Home</a></li>
                <li class="{{ set_active('programma') }}"><a href="/programma">Programma</a></li>
                <li class="{{ set_active('sessie') }}"><a href="/sessie">Break out sessies</a></li>
                <li class="{{ set_active('inschrijven') }}"><a href="/inschrijven">Inschrijven</a></li>
                <li class="{{ set_active('fotos') }}"><a href="/fotos">Foto's</a></li>
                <li class="{{ set_active('contact') }}"><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="wrapper">
    @yield('content')
</div>

<!-- Foooter
================== -->


<!-- Legal
============= -->
<div class="legal">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>Copyright &copy; Jelle Breuer 2015 - {{Carbon\Carbon::now()->year}} </p>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript
================================================== -->

{!! HTML::script('js/all.js') !!}
@yield('js')

</body>
</html>
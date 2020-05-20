<!doctype html>
<html lang="lt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, maximum-scale=1.0">
<title>D | Space</title>
<script src="https://kit.fontawesome.com/0adf7b258a.js" crossorigin="anonymous"></script>
<link rel="icon" href="{{ asset('/favicon.png') }}" type="image/png">
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"> 
<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
 
<!--[if lt IE 9]>
    <script src="{{ asset('js/respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/html5element.js') }}"></script>
<![endif]-->
 
</head>
<body>

<!--Header_sekcija-->
<header id="header_wrapper">
    @yield('header')
</header>
<!--Header_sekcijos pabaiga-->

<!-- Turinio sekcija-->
    @yield('content')



<script type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
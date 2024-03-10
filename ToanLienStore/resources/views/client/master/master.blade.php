<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="ToanLien Store">
    <meta name="keywords" content="Ogani, ToanLien, unica, creative, html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',config('app.name','@Master Layout'))</title>

    @yield('font')

    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/style.css')}}" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

    @yield('css')
</head>
<body>
    @yield('header')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    @yield('main')

    @yield('footer')

    @yield('js')
    @yield('preloader')
    <!-- <div id="preloader"></div>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div> -->

</body>
</html>

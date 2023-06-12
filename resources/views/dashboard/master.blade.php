<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('judul')</title>
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
</head>
<body>
    @yield('navbar')
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>

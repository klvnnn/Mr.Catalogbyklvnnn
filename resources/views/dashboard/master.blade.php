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
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper">
            @include('includes.sidebar')
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSpportedContent">
                            <!-- Dekstop Menu -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                        <img src="{{ asset('assets/images/user.png') }}" alt=""
                                            class="rounded-circle mr-2 profile-picture" />
                                        <b style="color: black"> Hi, {{ Auth::user()->role->name }} </b>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="section-content sction-dashboard-home">
                    <div class="container-fluid">
                        @yield('content')
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="dashboard-card-title">User</div>
                                            <div class="dashboard-card-subtitle">10</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="dashboard-card-title">Product</div>
                                            <div class="dashboard-card-subtitle">120</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="dashboard-card-title">Customer</div>
                                            <div class="dashboard-card-subtitle">70</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @yield('data')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

@extends('dashboard.master')
@section('navbar')
<div class="page-dashboard">
    <div class="d-flex" id="wrapper">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
                <img src="{{ asset('assets/images/favicon.png') }}" class="my-4" alt="" height="100px"/>
            </div>
            <div class="list-group list-group-flush">
                @if (Auth::user()->role->name == 'Admin')
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">
                    Dashboard
                </a>
                <a href="{{ route('dashboard.admin.user') }}" class="list-group-item list-group-item-action active">
                    User
                </a>
                </a>
                <a href="add-user" class="list-group-item list-group-item-action">
                    Add User
                </a>
                <a href="add-product" class="list-group-item list-group-item-action">
                    Add Product
                </a>
                <a href="add-slider" class="list-group-item list-group-item-action">
                    Add Slider
                </a>
                @endif
                <form action="logout" method="POST">
                    @csrf
                    <a class="list-group-item list-group-item-action">
                        <button class="rounded fixed-bottom m-3"
                            style="background:rgb(39, 35, 35); color:white; text-style:none; border:none; width:200px;" type="submit">
                            Logout
                        </button>
                    </a>
                </form>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
                <div class="container-fluid">
                    <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                        &laquo; Menu
                    </button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSpportedContent">
                        <span class="navbar navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSpportedContent">
                        <!-- Dekstop Menu -->
                        <ul class="navbar-nav d-none d-lg-flex ml-auto">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="navbarDropdown" role="button"
                                    data-toggle="dropdown">
                                    <img src="{{ asset('assets/images/user.png') }}" alt=""
                                        class="rounded-circle mr-2 profile-picture" />
                                    <b style="color: black"> Hi, {{ Auth::user()->role->name }} </b>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Dashboard</a>
                                    <a href="" class="dropdown-item">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="logout" class="dropdown-item">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Section Content -->
            <div class="section-content sction-dashboard-home">
                <div class="container-fluid">
                    <div class="dashboard-heading">
                        <h2 class="dashboard-title">Dashboard</h2>
                        <p class="dashboard-subtitle">Selamat Datang Admin</p>
                    </div>
                    <h3>HALO</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
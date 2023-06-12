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
                <a href="dashboard" class="list-group-item list-group-item-action">
                    Dashboard
                </a>
                <a href="/add-user" class="list-group-item list-group-item-action">
                    Add User
                </a>
                <a href="/add-product" class="list-group-item list-group-item-action active">
                    Add Product
                </a>
                <a href="/add-slider" class="list-group-item list-group-item-action">
                    Add Slider
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Settings
                </a>                        
                <a href="/" class="list-group-item list-group-item-action">
                    <button class="rounded fixed-bottom m-3"
                        style="background:rgb(39, 35, 35); color:white; text-style:none; border:none; width:200px;">
                        Logout
                    </button>
                </a>
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
                                    <img src="{{ asset('assets/img/angga.png') }}" alt=""
                                        class="rounded-circle mr-2 profile-picture" />
                                    Hi, Kelvin
                                </a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Dashboard</a>
                                    <a href="" class="dropdown-item">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/" class="dropdown-item">Logout</a>
                                </div>
                            </li>
                            <div class="nav-item">
                                <a href="#" class="nav-link d-inline-block mt-2">
                                    <img src="{{ asset('assets/img/shopping 1.svg') }}" alt="" />
                                    <div class="card-badge" style="background-color: #ff4500">3</div>
                                </a>
                            </div>
                        </ul>
                        {{-- <!-- Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="#" class="nav-link"> Hi, Angga </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block"> Cart </a>
                </li>
            </ul> --}}
                    </div>
                </div>
            </nav>
            <!-- Section Content -->
            <div class="section-content sction-dashboard-home">
                <div class="container-fluid">
                    <div class="dashboard-heading">
                        <h2 class="dashboard-title">Add Product</h2>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-12">
                                <br>
                                <br>
                                <form action="/add-slider-post" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Unggah Foto</label>
                                                        <input type="file" name="image" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-right">
                                                    <button type="submit" class="btn btn-success">
                                                        Save Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action active">
                    Dashboard
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
                        <h2 class="dashboard-title">Dashboard</h2>
                        <p class="dashboard-subtitle">Look what you have made today!</p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">Customer</div>
                                        <div class="dashboard-card-subtitle">$931,290</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">Revenue</div>
                                        <div class="dashboard-card-subtitle">$931,290</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">Transaction</div>
                                        <div class="dashboard-card-subtitle">22,409,399</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 mt-2">
                                <h5 class="mb-3">Recent Transactions</h5>
                                <a href="#" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('assets/images/men-02.jpg') }}" alt="" width="44px" height="44px"/>
                                            </div>
                                            <div class="col-md-4">Men's Clothes</div>
                                            <div class="col-md-3">Jhon Doe</div>
                                            <div class="col-md-3">12 Januari, 2023</div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ asset('assets/images/next.svg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('assets/images/women-01.jpg') }}" alt="" width="44px" height="44px"/>
                                            </div>
                                            <div class="col-md-4">Women Clothes</div>
                                            <div class="col-md-3">Masayoshi</div>
                                            <div class="col-md-3">24 maret, 2023</div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ asset('assets/images/next.svg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('assets/images/instagram-06.jpg') }}" alt="" width="44px" height="44px"/>
                                            </div>
                                            <div class="col-md-4">Trend Bag</div>
                                            <div class="col-md-3">Shayna</div>
                                            <div class="col-md-3">11 May, 2023</div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ asset('assets/images/next.svg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
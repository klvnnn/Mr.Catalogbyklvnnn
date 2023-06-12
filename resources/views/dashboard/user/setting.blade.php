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
                    @if (Auth::user()->role->name == 'User')
                    <a href="{{ route('dashboard.setting') }}" class="list-group-item list-group-item-action active">
                        Settings
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
                            <h2 class="dashboard-title">Setting User</h2>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <br>
                                    <h1>RENCANA NYA DI ISI SETTING USER</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                    <a href="/add-user" class="list-group-item list-group-item-action active">
                        Add User
                    </a>
                    <a href="/add-product" class="list-group-item list-group-item-action">
                        Add Products
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
                                        <img src="{{ asset('assets/images/user.png') }}" alt=""
                                            class="rounded-circle mr-2 profile-picture" />
                                        <b style="color: black"> Hi, Kelvin</b>
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
                            <h2 class="dashboard-title">Add Users</h2>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <form action="/add-user-post" method="POST">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Nama Lengkap</label>
                                                            <input type="text" name="name" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" v-if="is_store_open">
                                                            <label>Role</label>
                                                            <select name="role" class="form-control">
                                                                <option value="" disabled>Admin</option>
                                                                <option value="" disabled>Staff</option>
                                                                <option value="" disabled>User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" v-if="is_store_open">
                                                            <label>Password</label>
                                                            <input type="password" name="password" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" v-if="is_store_open">
                                                            <label>Email</label>
                                                            <input type="email" name="email" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" v-if="is_store_open">
                                                            <label>Phone</label>
                                                            <input type="text" name="phone" class="form-control" />
                                                        </div>
                                                    </div>
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

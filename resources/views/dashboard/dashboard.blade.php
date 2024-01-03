@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
@endsection
@section('data')
    <div class="row mt-3">
        <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transactions</h5>
            <a href="#" class="card card-list d-block">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{ asset('assets/images/abc.jpg') }}" alt="" width="44px"
                                height="44px" />
                        </div>
                        <div class="col-md-4">Yamaha</div>
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
                            <img src="{{ asset('assets/images/123.jpg') }}" alt="" width="44px"
                                height="44px" />
                        </div>
                        <div class="col-md-4">Honda</div>
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
                            <img src="{{ asset('assets/images/binter.JPG') }}" alt="" width="44px"
                                height="44px" />
                        </div>
                        <div class="col-md-4">Kawasaki</div>
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
@endsection

@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Brands</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
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
        <h5 class="mt-3 mb-3">&nbsp; Add New Brands</h5>
        <form action="{{ route('brands.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Add Brands</label>
                                <input type="text" name="name" class="form-control" />
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
@endsection

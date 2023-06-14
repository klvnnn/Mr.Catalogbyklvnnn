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
        <h5 class="mt-3 mb-3">&nbsp; All Brands</h5>
        <div class="card mb-4 mt-2">
            <div class="card-body ">
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th colspan="4">Brands</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brands)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brands->name }}</td>
                                <td>
                                    <form action="{{ route('brands.destroy', $brands->id) }}" method="POST" class="d-inline">
                                        <a href="{{ route('brands.edit', $brands->id) }}" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('brands.create') }}" class="btn btn-primary mb-2">
                    <img src="{{ asset('assets/images/icons8-add-user-32.png') }}" alt="" width="25" height="25"> Add New brands</a>
            </div>
        </div>
    </div>
@endsection

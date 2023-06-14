@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Slider</h2>
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
        <h5 class="mt-3 mb-3">&nbsp; All Slider</h5>
        <div class="card mb-4 mt-2">
            <div class="card-body ">
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sliders as $slider)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->caption}}</td>
                                <td>{{ $slider->image }}</td>
                                <td>
                                    <form onsubmit="return confirm('Are you sure? ');" action="{{ route('slider.destroy', $slider->id) }}" method="POST">
                                        <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <td colspan="12"> <center>Data Tidak Tersedia</center> </td>
                        @endforelse
                    </tbody>
                </table>
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-2">
                    <img src="{{ asset('assets/images/icons8-add-user-32.png') }}" alt="" width="25" height="25"> Add Product</a>
            </div>
        </div>
    </div>
@endsection

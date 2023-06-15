@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Slider</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
@endsection
@section('data')
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
                            <td>{{ $slider->caption }}</td>
                            <td>
                                <img src="{{ asset('storage/slider/' . $slider->image) }}" class="img-fluid" style="max-width: 100px;"
                                    alt="{{ $slider->image }}">
                            </td>
                            <td>
                                <form onsubmit="return confirm('Are you sure? ');"
                                    action="{{ route('slider.destroy', $slider->id) }}" method="POST">
                                    <a href="{{ route('slider.edit', $slider->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="12">
                            <center>Data Tidak Tersedia</center>
                        </td>
                    @endforelse
                </tbody>
            </table>
            <a href="{{ route('slider.create') }}" class="btn btn-primary mb-2">
                <img src="{{ asset('assets/images/icons8-plus-64.png') }}" alt="" width="20" height="20">
                &nbsp;Add slider</a>
        </div>
    </div>
@endsection

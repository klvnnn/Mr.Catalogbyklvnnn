@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Category</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
@endsection
@section('data')
    <h5 class="mt-3 mb-3">&nbsp; All Category</h5>
    <div class="card mb-4 mt-2">
        <div class="card-body ">
            <table id="dataTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    class="d-inline">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
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
            @if (Auth::user()->role->name == 'Admin')
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">
                    <img src="{{ asset('assets/images/icons8-plus-64.png') }}" alt="" width="20" height="20"> Add New Category</a>
            @endif
        </div>
    </div>
@endsection

@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Role</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
@endsection
@section('data')
    <h5 class="mt-3 mb-3">&nbsp; All Role</h5>
    <div class="card mb-4 mt-2">
        <div class="card-body ">
            <table id="dataTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th colspan="2">Role</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <span @if ($role->name == 'Admin') @class(['badge', 'bg-success']) @endif
                                    @if ($role->name == 'Staff') @class(['badge', 'bg-primary']) @endif
                                    @if ($role->name == 'User') @class(['badge', 'bg-warning']) @endif>{{ $role->name }}</span>
                            </td>
                            <td>
                                <form action="{{ route('role.destroy', $role->id) }}" method="POST" class="d-inline">
                                    <a href="{{ route('role.edit', $role->id) }}" class="btn btn-warning">Edit</a>
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
            <a href="{{ route('role.create') }}" class="btn btn-primary mb-2">
                <img src="{{ asset('assets/images/icons8-add-user-32.png') }}" alt="" width="25" height="25">
                Add Role</a>
        </div>
    </div>
@endsection

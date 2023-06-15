@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data User</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
@endsection
@section('data')
    <h5 class="mt-3 mb-3">&nbsp; All User</h5>
    <div class="card mb-4 mt-2">
        <div class="card-body ">
            <table id="dataTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Avatar</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="https://placehold.co/50x50" alt="avatar">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span @if ($user->role->name == 'Admin') @class(['badge', 'bg-success']) @endif
                                    @if ($user->role->name == 'Staff') @class(['badge', 'bg-primary']) @endif
                                    @if ($user->role->name == 'User') @class(['badge', 'bg-warning']) @endif>{{ $user->role->name }}</span>
                            </td>
                            <td>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
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
                <a href="{{ route('user.create') }}" class="btn btn-primary mb-2">
                    <img src="{{ asset('assets/images/icons8-add-user-32.png') }}" alt="" width="25"
                        height="25"> Add User</a>
            @endif
        </div>
    </div>
@endsection

@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Add Users</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
@endsection
@section('data')
    <h5 class="mt-3 mb-3">&nbsp; Add New User</h5>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" v-if="is_store_open">
                            <label>Role</label>
                            <select name="role" class="form-control">
                                <option selected disabled>Select role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
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
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" />
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
@endsection

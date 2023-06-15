@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Category</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
@endsection
@section('data')
    <h5 class="mt-3 mb-3">&nbsp; Edit Category</h5>
    <form action="{{ route('categories.update', $categories->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type Category</label>
                            <input type="text" name="name" class="form-control" value="{{ $categories->name }}" />
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

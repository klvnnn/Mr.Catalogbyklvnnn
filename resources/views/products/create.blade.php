@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Add Product</h2>
        <p class="dashboard-subtitle">Add more Products</p>
    </div>
@endsection
@section('data')
    <div class="row">
        <div class="col-12">
            <br>
            <br>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" v-if="is_store_open">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option selected disabled>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" v-if="is_store_open">
                                    <label>Brands</label>
                                    <select name="brand" class="form-control">
                                        <option selected disabled>Select Brands</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" v-if="is_store_open">
                                    <label>Price</label>
                                    <input type="text" name="price" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" v-if="is_store_open">
                                    <label>Sale Price</label>
                                    <input type="text" name="sale_price" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Unggah Product</label>
                                    <input type="file" name="image" class="form-control" />
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
    </div>
@endsection

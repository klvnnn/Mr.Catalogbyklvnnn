@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Product</h2>
        <p class="dashboard-subtitle">Edit Products</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-12">
                <br>
                <br>
                <form action="{{ route('products.update', $products->id) }}" method="POST">
                    @method('put')
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
                                            <option value="{{ $category->id }}"
                                                {{ $products->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" v-if="is_store_open">
                                        <label>Brands</label>
                                        <select name="brands" class="form-control">
                                            <option selected disabled>Select Brands</option>
                                            @foreach ($brands as $brand)
                                            <option value="{{ $brand->name }}"
                                                {{ $products->brands == $brand->name ? 'selected' : '' }}>{{ $brand->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $products->name }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" v-if="is_store_open">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" value="{{ $products->price }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" v-if="is_store_open">
                                        <label>Sale Price</label>
                                        <input type="text" name="sale_price" class="form-control" value="{{ $products->sale_price}}" />
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
    </div>
@endsection

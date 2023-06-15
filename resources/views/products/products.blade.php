@extends('dashboard.master')
@section('content')
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Products</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
@endsection
@section('data')
    <h5 class="mt-3 mb-3">&nbsp; All Products</h5>
    <div class="card mb-4 mt-2">
        <div class="card-body ">
            <table id="dataTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Brands</th>
                        <th>Nama</th>
                        <th>Price</th>
                        <th>Sale Price</th>
                        <th>Image</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->brands }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Rp. {{ number_format($product->price, 0, 2) }}</td>
                            <td>Rp. {{ number_format($product->sale_price, 0, 2) }}</td>
                            <td>
                                @if ($product->image == null)
                                    <span class="badge bg-primary">No Image</span>
                                @else
                                    <img src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}"
                                        style="max-width: 50px">
                                @endif
                            </td>
                            <td>
                                <form onsubmit="return confirm('Are you sure? ');"
                                    action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::user()->role->name == 'Admin')
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-2">
                    <img src="{{ asset('assets/images/icons8-plus-64.png') }}" alt="" width="20" height="20"> Add Product</a>
            @endif
        </div>
    </div>
@endsection

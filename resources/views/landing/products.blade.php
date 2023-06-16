@extends('landing.master')
@section('category')
    @foreach ($categories as $category)
    <li class="scroll-to-section"><a href="{{ route('landing.products', ['category' => $category->name]) }}">{{ $category->name }}</a></li>
    @endforeach
@endsection
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Products</h2>
                        <span>Best, Modern &amp; Trends Products in The World</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <!-- ***** Male Area Starts ***** -->
    <section class="section" id="male">
        <div class="container">
            <h2>Price</h2>
            <form action="{{ route('landing.products') }}" method="GET">
                @csrf
                <div class="row mt-3 mb-5">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Lowest Price" name="min" value="{{ old('min') }}">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Highest Price" name="max" value={{ old('max') }}>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-dark">Filter</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>All Catalog</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            @forelse ($products as $product)
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="{{ route('product.show', ['id' => $product->id]) }}"><i
                                                            class="fa fa-eye"></i></a></li>
                                                <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('storage/product/' . $product->image) }}" alt="..."
                                            width="370px" height="390px" />
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $product->name }}</h4>
                                        <span
                                            class="text-decoration-line-through">Rp.{{ number_format($product->price, 0) }}</span>
                                        <span>Rp.{{ number_format($product->sale_price, 0) }}</span>
                                        <ul class="stars mt-5 pt-3 me-1">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @empty
                                <div class="alert alert-secondary w-100 text-center" role="alert">
                                    <h4>Produk belum tersedia</h4>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
@endsection

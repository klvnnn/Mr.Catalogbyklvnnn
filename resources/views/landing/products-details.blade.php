@extends('landing.master')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Details Product Page</h2>
                        <span>See Mr.Catalog Products More</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading mb-3">
                        <h2>Products Details</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="{{ asset('storage/product/' . $products->image) }}" alt="..." height="700px" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{ $products->name }}</h4>
                        <div class="total">
                            <br><h4>{{ $products->category->name }}</h4><br>
                        </div>
                        <div class="total">
                            <br><h4>{{ $products->brands }}</h4><br>
                        </div>
                        <div class="quote">
                            <br>
                            <i class="fa fa-quote-left"></i>
                            <p>Fit your outfit to fit your day, with mr.catalog products!</p>
                        </div>
                        <div class="quantity-content">
                            <div class="total">
                                <h4>Rp.{{ number_format($products->sale_price, 0) }}</h4>
                                <div class="main-border-button"><a href="#">Add To Cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
@endsection

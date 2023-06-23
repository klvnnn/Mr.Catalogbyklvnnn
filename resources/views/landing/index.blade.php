@extends('landing.master')
@section('content')
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Welcome to Mr Catalog</h4>
                                <span>Ready to fit Your Outfit</span>
                                <div class="main-border-button">
                                    <a href="#male">Shop Now</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/left-banner-image.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Women</h4>
                                            <span>Best Clothes For Women</span>
                                        </div>
                                        <img src="{{ asset('assets/images/baner-right-image-01.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Men</h4>
                                            <span>Best Clothes For Men</span>
                                        </div>
                                        <img src="{{ asset('assets/images/baner-right-image-02.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kids</h4>
                                            <span>Best Clothes For Kids</span>
                                        </div>
                                        <img src="{{ asset('assets/images/baner-right-image-03.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accessories</h4>
                                            <span>Best Trend Accessories</span>
                                        </div>
                                        <img src="{{ asset('assets/images/baner-right-image-04.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <center>
                <div class="section-heading mt-4">
                    <h2>Introductions</h2>
                    <span>Introductions to Mr.Catalog</span>
                </div>
                <p class="mt-4">We are delighted to introduce Mr. Catalog, your one-stop solution for all your shopping
                    needs. As a company dedicated to providing exceptional products and services, we strive to create a
                    seamless and enjoyable shopping experience for you.

                    At Mr. Catalog, we understand the importance of convenience and variety in today's fast-paced world.
                    That's why we have curated a wide range of products from renowned brands, ensuring that you have access
                    to the latest trends and highest quality items.

                    Our team is committed to delivering excellence in every aspect of our business. From our user-friendly
                    website and mobile app to our efficient customer service, we prioritize your satisfaction above all
                    else. Whether you're searching for fashion essentials, home decor, electronics, or any other category,
                    Mr. Catalog has got you covered.

                    We take pride in our partnerships with trusted suppliers and manufacturers, guaranteeing authentic
                    products that meet your expectations. Furthermore, we regularly update our catalog to keep up with the
                    ever-evolving market, so you can always find something new and exciting.</p>
            </center>
        </div>
    </div>
    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="male">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>What News?</h2>
                        <span>Check what Mr.Catalog Update today</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            {{-- slider --}}
                            @foreach ($sliders as $slider)
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="{{ route('landing.products') }}"><i class="fa fa-eye"></i></a>
                                                </li>
                                                </li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('storage/slider/' . $slider->image) }}"
                                            alt="{{ $slider->image }}" width="370px" height="390px">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $slider->title }}</h4>
                                        <span>{{ $slider->caption }}</span>
                                    </div>
                                </div>
                            @endforeach
                            {{-- Slider End --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area End ***** -->
@endsection

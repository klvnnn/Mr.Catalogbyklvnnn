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

@extends('landing.master')
@section('content')
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <img src="{{ asset('assets/images/cover.jpg') }}" alt="">
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
                <p class="mt-4">We strive to find the most fundamental expression of lifestyle and custom motorcycles. We
                    don't focus on extreme creations but rather original and fun ideas. Imagine we are trying not to make
                    custom motorbikes. More than that, we create a lifestyle with custom motorbikes.
                    Catalog stands from a garage and a hobby, to appear creative as it is. Not a big, grandiose business
                    plan. Cooperation, friends, comrades and the freedom of togetherness that is not bound.
                </p>
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

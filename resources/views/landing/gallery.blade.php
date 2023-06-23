@extends('landing.master')
@section('content')
<section class="our-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="section-heading">
                    <h2>Gallery</h2>
                    <span>Mr.Catalog Galleries</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery1.jpg') }}" alt="" width="310" height="290">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery2.jpg') }}" alt="" width="310" height="290">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery3.jpg') }}" alt="" width="310" height="290">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery4.jpg') }}" alt="" width="310" height="290">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery5.jpg') }}" alt="" width="310" height="290">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery6.jpg') }}" alt="" width="310" height="290">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery7.jpg') }}" alt="" width="310" height="290">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery8.jpeg') }}" alt="" width="310" height="290">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <img src="{{ asset('assets/images/gallery9.jpeg') }}" alt="" width="310" height="290">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
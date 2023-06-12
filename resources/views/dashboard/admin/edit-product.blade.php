@extends('master')
@section('isi')
<main id="main">
    <section id="details" class="about">
        <div class="container" data-aos="fade-up">
            <br> 
            <h5><b>Detail Product</b></h5>
            <br>
            <div class="row d-flex justify-content-center h-100">
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="d-flex text-black">
                    <div class="flex-shrink-0 img-fluid" style="width: 180px; border: radius 10px;">
                    <img src="" alt="" width="250px" height="300px">
                    </div>
                    <form action="/update-product" class="form-horizontal row-fluid ms-5 ps-5" method="POST">
                        @method('put')
                        @csrf
                        <input type="hidden" class="form-control" value="{{ $product->id }}" name="id">
                        <div class="control-group">
                            <b><label class="form-label">Nama Produk</label></b>
                            <div class="controls">
                                <input type="text" name="name" class="form-control form Button-Up" value="{{ $product->name }}" required >
                            </div>
                        </div>
                        <div class="control-group">
                            <b><label class="form-label">Description</label></b>
                            <div class="controls">
                                <input type="text" name="description" class="form-control form Button-Up" value="{{ $product->description }}" required >
                            </div>
                        </div>
                        <div class="control-group">
                            <b><label class="form-label">Price</label></b>
                            <div class="controls">
                                <input type="text" name="price" class="form-control form Button-Up" value="{{ $product->price }}" required >
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Update User</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</main>
@endsection
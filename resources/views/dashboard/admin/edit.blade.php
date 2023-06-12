@extends('master')
@section('isi')
<main id="main">
    <section id="details" class="about">
        <div class="container" data-aos="fade-up">
            <br> 
            <h5><b>Detail User</b></h5>
            <br>
            <div class="row d-flex justify-content-center h-100">
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="d-flex text-black">
                    <div class="flex-shrink-0 img-fluid" style="width: 180px; border: radius 10px;">
                    <img src="" alt="" width="250px" height="300px">
                    </div>
                    <form action="/update-user" class="form-horizontal row-fluid ms-5 ps-5" method="POST">
                        @method('put')
                        @csrf
                        <input type="hidden" class="form-control" value="{{ $user->id }}" name="id">
                        <div class="control-group">
                            <b><label class="form-label">Nama:</label></b>
                            <div class="controls">
                                <input type="text" name="name" class="form-control form Button-Up" value="{{ $user->name }}" required >
                            </div>
                        </div>
                        <label class="form-label"><b>Role</b></label>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option disabled="" selected=""></option>
                                <option value="" disabled>Admin</option>
                                <option value="" disabled>Staff</option>
                            </select>
                        <div class="control-group">
                            <b><label class="form-label">Email:</label></b>
                            <div class="controls">
                                <input type="text" name="email" class="form-control form Button-Up" value="{{ $user->name }}" required >
                            </div>
                        </div>
                        <div class="control-group">
                            <b><label class="form-label">Phone:</label></b>
                            <div class="controls">
                                <input type="text" name="phone" class="form-control form Button-Up" value="{{ $user->name }}" required >
                            </div>
                        </div>
                        <div class="control-group">
                            <b><label class="form-label">Address:</label></b>
                            <div class="controls">
                                <input type="text" name="address" class="form-control form Button-Up" value="{{ $user->name }}" required >
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
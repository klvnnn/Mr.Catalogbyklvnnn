<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="card login-form">
            <center>
                <img src="{{ asset('assets/images/favicon.png') }}" alt="" class="mb-4" height="54px">
            </center>
            <div class="card-body">
                <h2 class="card-title">Register</h2>
                <h6 class="card-subtitle text-muted mb-5 fw-bold">Kalo belum punya akun, register dulu</h6>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    {{-- <div class="mb-4" class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Select Role</label>
                        <select name="role_id" class="form-control" id="exampleInputEmail1">
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                            <option value="3">User</option>
                        </select>
                    </div> --}}
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Username" name="name"/>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Email" name="email"/>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Min 8 Character" name="password"/>
                    </div>

                    <div class="d-grid mt-5">
                        <button type="submit" class="btn btn-success btn-login btn-secondary">Register</button>
                    </div>

                    <div class="mt-3">
                        <label class="justify-content-center d-flex">Sudah Punya Akun ?<a href="{{ route('login') }}" class="link">&nbsp login sekarang</a></label>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

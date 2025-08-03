<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />
    <link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">
    <title>Register - Borna Engineering</title>
</head>

<body class="bg-register">
<div class="wrapper">
    <div class="d-flex align-items-center justify-content-center my-lg-0 py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="border p-4 rounded-4">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/logo.png') }}" width="`150`" alt="" />
                                    <h5 class="mt-3 mb-0">Welcome</h5>
                                    <p class="mb-4">Create Your New Account</p>
                                </div>

                                <form method="POST" action="{{ route('register') }}" class="row g-3">
                                    @csrf

                                    <div class="col-sm-6">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" name="name" id="name"
                                               class="form-control rounded-5 @error('name') is-invalid @enderror"
                                               value="{{ old('name') }}" placeholder="John Deo" required autofocus>
                                        @error('name')
                                        <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" name="email" id="email"
                                               class="form-control rounded-5 @error('email') is-invalid @enderror"
                                               value="{{ old('email') }}" placeholder="example@user.com" required>
                                        @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password"
                                               class="form-control rounded-5 @error('password') is-invalid @enderror"
                                               placeholder="Enter Password" required>
                                        @error('password')
                                        <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                               class="form-control rounded-5"
                                               placeholder="Confirm Password" required>
                                    </div>


                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-gradient-info rounded-5">
                                                <i class='bx bx-user'></i> Register
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <p class="mb-0">
                                            Already have an account?
                                            <a href="{{ route('login') }}">Sign in here</a>
                                        </p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>

<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
</body>
</html>

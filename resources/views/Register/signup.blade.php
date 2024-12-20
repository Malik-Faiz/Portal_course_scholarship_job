@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <!-- ************======((( STYLESHEETS FLIES)))======********** -->
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/select2.css') }}" />
</head>

<body>

    <div class="row m-0" style="height: 100vh;">
        <div class="col-lg-6 d-none d-lg-block login-bg">
            <div class="">
                <div class="mt-5 text-center">
                    <img src="{{ asset('assets-2/assets/images/login-body.png') }}" class="object-fit-contain my-5" alt="" />
                </div>
                <div class="text-center text-white my-4 px-3">
                    <h3 class="fw-bold mb-5">Welcome Back...!</h3>
                    <p class="small mb-5">Welcome back to Study Abroad Navigator! Explore thousands of degree programs from around the world and embark on your educational journey today.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6  p-sm-5">
            <div class="py-5 text-center">
                <h2 class="mb-0">Create a new account</h2>
                <p class="small">Already have an account? <span><a href="{{ route('login') }}" class="text-danger">Sign-in here</a></span>
                </p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="first_name" class="form-label regular small">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Please Enter First Name" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="last_name" class="form-label regular small">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Please Enter Last Name" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="email" class="form-label regular small">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Please Enter Email Address" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label regular small">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Please Enter Phone Number" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="password" class="form-label regular small">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Please Enter Password" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label regular small">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Please Confirm Password" required />
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly align-items-center pt-5 mt-3">
                    <button type="submit" class="btn btn-danger px-5 w-75 text-white">
                        Signup
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('assets-2/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-2/assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="./assets-2/assets/js/main.js"></script>
    <script src="./assets-2/assets/js/select2.min.js"></script>
</body>
</html>
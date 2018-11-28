<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontawesome.min.css') }}" rel="stylesheet">
</head>

<body class="app flex-row align-items-center">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                        <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                            </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                            <i class="fa fa-redo"></i>
                                </span>
                            </div>
                            <input class="form-control" type="password" placeholder="Repeat password">
                        </div>
                        <button class="btn btn-block btn-success" type="button">Create Account</button>
                    </div>
                    <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block" type="button">
                                    <span>tmp</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-block" type="button">
                                    <span>tmp</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
<!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

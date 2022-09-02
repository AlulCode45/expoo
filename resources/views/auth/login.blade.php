<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)), url("{{ asset('assets/image/bg.png') }}");
            background-size: cover;
            width: 100vw;
            height: calc(100vh - 66px);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <div class="row">
                    <div class="col my-auto">
                        <img src="{{ asset('assets/image/logo.png') }}" alt="">
                    </div>
                    <div class="col my-auto m-0 m-0">
                        <h6 class="cas-text m-0 p-0">Class Assigment System ( CAS )</h6>
                        <h6 class="m-0 p-0">SMK Negeri 4 Bojonegoro</h6>
                    </div>
                </div>
            </a>
        </div>
    </nav>

    <div class="d-flex w-100 h-100">
        <div class="m-auto">
            <div class="card rounded rounded-3 shadow shadow-lg  card-login">
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <div class="card-body text-center p-5">
                    <img src="{{ asset('assets/image/logo.png') }}" height="150">
                    <form action="{{ route('login') }}" method="post" class=" mt-4">
                        @csrf
                        <div class="text-start form-group">
                            <label for="email">Email :</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="text-start form-group mt-2">
                            <label for="password">Password :</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <p class="my-3 text-start">Tidak memiliki akun ? <a href="register" class="fw-bold">Register</a>
                        </p>
                        <div class="form-group mt-1">
                            <button class="btn btn-login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>
</body>

</html>

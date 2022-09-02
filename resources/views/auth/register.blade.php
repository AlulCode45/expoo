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
            overflow-x: hidden;
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

    <div class="d-flex w-100 h-100 mt-5 mb-5">
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
                    <form action="{{ route('register') }}" method="post" class="mt-4" id="registerForm">
                        @csrf
                        <div class="row">
                            <div class="text-start form-group mt-2">
                                <label for="name">Nama :</label>
                                <input type="text" name="fullname"
                                    class="form-control @error('fullname') is-invalid @enderror" required>
                                @error('fullname')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('fullname') }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <div class="text-start form-group mt-2">
                                    <label for="class">Kelas :</label>
                                    <select name="class_id"
                                        class="form-control @error('class_id') is-invalid @enderror"required>
                                        <option value="">--- Pilih Kelas ---</option>
                                        @foreach ($listClass as $class)
                                            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('class_id')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('class_id') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text-start form-group mt-2">
                                    <label for="password">Password :</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="password"required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="text-start form-group mt-2">
                                    <label for="email">Email :</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text-start form-group mt-2">
                                    <label for="confirm_passsword">Konfirmasi Password :</label>
                                    <input type="password" name="confirm_passsword" class="form-control"
                                        id="confirmPassword"required>
                                    <div class="invalid-feedback d-none" id="invalid-password">
                                        Password tidak sesuai
                                    </div>
                                </div>
                            </div>
                            <p class="my-3 text-start">Sudah memiliki akun ? <a href="login" class="fw-bold">Login</a>
                            </p>
                            <div class="form-group mt-1">
                                <button class="btn btn-login">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        function checkPasswordMatch() {
            var password = $('#password').val();
            var confirmPassword = $('#confirmPassword').val();
            if (password != confirmPassword) {

                $("#password").removeClass('is-valid').addClass("is-invalid");
                $("#confirmPassword").removeClass('is-valid').addClass("is-invalid");
                $("#invalid-password").removeClass('d-none');
            } else {
                $('#confirmPassword').removeClass('is-invalid').addClass('was-validated');
                $('#password').removeClass('is-invalid').addClass('was-validated');
            }
        }
        $(document).ready(function() {
            $("#password").keyup(checkPasswordMatch);
            $("#confirmPassword").keyup(checkPasswordMatch);
        });
    </script>
</body>

</html>

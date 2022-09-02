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
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-dark me-4" aria-current="page" href="#">Home</a>
                    <a class="nav-link text-dark me-4" href="#">About</a>
                    <a class="nav-link btn btn-login" href="/login">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <header class="container">
        <div class="d-flex vh-100">
            <div class="row my-auto">
                <div class="col-lg-7 col-12 my-auto">
                    {{-- <span id="typed-string"></span> --}}
                    <div class="fw-bold welcome-text" id="typed">Selamat Datang di “Class
                        Assignment
                        System”</div>
                    <p data-aos="fade-up">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing
                        elit.Nihil atque facere sit temporibus tenetur quidem consectetur voluptatibus mollitia</p>
                </div>
                <div class="col-lg-5 my-auto text-right" data-aos="fade-up-left">
                    <img src="{{ asset('assets/image/ilustration5.png') }}" class="main-ilustration" alt="">
                </div>
            </div>
        </div>
    </header>
    <div class="bg-top"></div>
    <div class="main-content d-flex">
        <div class="start-content container">
            <div class="row">
                <div class="col-lg-6 order-lg-first col-12 my-auto">
                    <div class="latar-belakang">
                        <h1>Latar Belakang Class Assignment System</h1>
                        <p> Dunia pendidikan erat kaitannya dengan perkembangan teknologi. Namun di Indonesia masih
                            banyak mengandalkan pembelajaran tatap muka di kelas. Kendala siswa yang PKL jauh dari
                            sekolah dan tidak dapat mengikuti pembelajaran tatap muka menjadi latar belakang
                            dibuatnya Class Assigment System.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-first my-auto text-center">
                    <img src="{{ asset('assets/image/ilustration1.png') }}" class="latar-belakang-ilustration"
                        alt="">
                </div>
            </div>

            <div class="row row-cols-lg-3 row-cols-1">
                <div class="col my-auto text-center advantages-card rounded rounded-3">
                    <img src="{{ asset('assets/image/ilustration2.png') }}" class="mt-3" alt="">
                    <h5 class="mx-auto mt-2">Mengelola kelas dengan mudah.</h5>
                </div>
                <div class="col my-auto text-center advantages-card rounded rounded-3">
                    <img src="{{ asset('assets/image/ilustration3.png') }}" class="mt-3" alt="">
                    <h5 class="mx-auto mt-2">Meningkatkan kolaborasi dan komunikasi.</h5>
                </div>
                <div class="col my-auto text-center advantages-card rounded rounded-3">
                    <img src="{{ asset('assets/image/ilustration4.png') }}" class="mt-3" alt="">
                    <h5 class="mx-auto mt-2">Mengoorganisir tugas dalam kelas.</h5>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="main-footer">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-4 col-12">
                        <img src="{{ asset('assets/image/logo.png') }}" width="60" alt="">
                        <p class="mt-4">Class Assigment System ( CAS )
                            merupakan aplikasi manajemen kelas
                            untuk guru dan siswa SMK N 4 Bojonegoro</p>
                    </div>
                    <div class="col-lg-3 col-12 border-end border-dark">
                        <h5>IDENTITAS SEKOLAH</h5>
                        <p>NPSN : 20541267 <br>
                            Status : Negeri <br>
                            Bentuk Pendidikan : SMK<br>
                            Kepemilikan : Pemerintah Daerah<br>
                            Nama : SMK Negeri 4 Bojonegoro</p>
                    </div>
                    <div class="col-lg-3 col-12 border-end border-dark ps-3">
                        <h5>LOKASI SEKOLAH</h5>
                        <p>Jalan Raya Surabaya, Sukowati
                            Kec. Kapas, Kabupaten Bojonegoro
                            Jawa Timur 62181</p>
                    </div>
                    <div class="col-2 ps-3">
                        <h5>HUBUNGI KAMI</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </script>
    <script>
        // start aos
        AOS.init({
            duration: 1000,
        });


        // make effect typing using typed.js
        // var typed_strings =
        //     $("#typed-string").text();
        // var typed = new Typed('#typed', {
        //     strings: typed_strings.split(", "),
        //     typeSpeed: 60,
        //     loop: false,

        // });
    </script>
</body>

</html>

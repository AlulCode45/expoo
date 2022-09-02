@extends('template.app')
@section('content')
    <h3 class="fw-bolder font-mulish mb-3">Semua kelas</h3>
    <div class="row row-cols-lg-3 row-cols-1">
        <div class="col my-2">
            <div class="card class-card shadow">
                <div class="card-header class-header  d-flex">
                    <div class="row">
                        <div class="col-7 my-auto">
                            <h4 class="text-white">Bhs Indonesia</h4>
                        </div>
                        <div class="col-5">
                            <img src="{{ asset('assets/image/indonesia-language.png') }}" height="95" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Muhammad Khoyron Ahlaqul Firdaus, S.Kom</h6>
                    {{-- <div class="d-flex w-100">
                        <span class="p-2 ms-auto rounded text-white">Jumlah Soal : 10</span>
                    </div> --}}
                </div>
                <div class="card-footer d-flex">
                    <div class="ms-auto">
                        Jumlah soal : 20
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-2">
            <div class="card class-card shadow">
                <div class="card-header class-header  d-flex">
                    <div class="row">
                        <div class="col-7 my-auto">
                            <h4 class="text-white">Matematika</h4>
                        </div>
                        <div class="col-5">
                            <img src="{{ asset('assets/image/indonesia-language.png') }}" height="95" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Muhammad Khoyron Ahlaqul Firdaus, S.Kom</h6>
                    {{-- <div class="d-flex w-100">
                        <span class="p-2 ms-auto rounded text-white">Jumlah Soal : 10</span>
                    </div> --}}
                </div>
                <div class="card-footer d-flex">
                    <div class="ms-auto">
                        Jumlah soal : 20
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-2">
            <div class="card class-card shadow">
                <div class="card-header class-header  d-flex">
                    <div class="row">
                        <div class="col-7 my-auto">
                            <h4 class="text-white">IPA & IPS</h4>
                        </div>
                        <div class="col-5">
                            <img src="{{ asset('assets/image/indonesia-language.png') }}" height="95" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Muhammad Khoyron Ahlaqul Firdaus, S.Kom</h6>
                    {{-- <div class="d-flex w-100">
                        <span class="p-2 ms-auto rounded text-white">Jumlah Soal : 10</span>
                    </div> --}}
                </div>
                <div class="card-footer d-flex">
                    <div class="ms-auto">
                        Jumlah soal : 20
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-2">
            <div class="card class-card shadow">
                <div class="card-header class-header  d-flex">
                    <div class="row">
                        <div class="col-7 my-auto">
                            <h4 class="text-white">PAI</h4>
                        </div>
                        <div class="col-5">
                            <img src="{{ asset('assets/image/indonesia-language.png') }}" height="95" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Muhammad Khoyron Ahlaqul Firdaus, S.Kom</h6>
                    {{-- <div class="d-flex w-100">
                        <span class="p-2 ms-auto rounded text-white">Jumlah Soal : 10</span>
                    </div> --}}
                </div>
                <div class="card-footer d-flex">
                    <div class="ms-auto">
                        Jumlah soal : 20
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col my-2">
            <div class="card class-card shadow">
                <div class="card-header class-header  d-flex">
                    <div class="row">
                        <div class="col-7 my-auto">
                            <h4 class="text-white">Matematika</h4>
                        </div>
                        <div class="col-5">
                            <img src="{{ asset('assets/image/indonesia-language.png') }}" height="95" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Muhammad Khoyron Ahlaqul Firdaus, S.Kom</h6>
                    <div class="d-flex w-100">
                        <span class="p-2 ms-auto rounded text-white">Jumlah Soal : 10</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-2">
            <div class="card class-card shadow">
                <div class="card-header class-header  d-flex">
                    <div class="row">
                        <div class="col-7 my-auto">
                            <h4 class="text-white">Bhs Inggris</h4>
                        </div>
                        <div class="col-5">
                            <img src="{{ asset('assets/image/indonesia-language.png') }}" height="95" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Muhammad Khoyron Ahlaqul Firdaus, S.Kom</h6>
                    <div class="d-flex w-100">
                        <span class="p-2 ms-auto rounded text-white">Jumlah Soal : 10</span>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

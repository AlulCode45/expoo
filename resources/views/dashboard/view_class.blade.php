@extends('template.app')
@section('content')
    <div class="card card-view-class">
        <div class="card-header d-flex">
            <div class="my-auto">
                <h1 class="fw-bolder text-white">Bhs Indonesia</h1>
                <p class="fw-normal text-white">Muhammad Khoyron Ahlaqul Firdaus, S.Kom</p>
            </div>
        </div>
        <div class="card-body">
            <div class="card card-body list-task my-3">
                <div class="row">
                    <div class="col-lg-1 col-2 my-auto">
                        <div class="task-icon rounded rounded-circle p-2 d-flex">
                            <img src="{{ asset('assets/image/notes-icon.png') }}" width="15" height="15"
                                class="m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-lg-11 col-10 task-title my-auto">
                        <h5>Catatan : Merangkum Materi Bab 1</h5>
                        <p>Senin 20, Agustus 2022</p>
                    </div>
                </div>
            </div>
            <div class="card card-body list-task my-3">
                <div class="row">
                    <div class="col-lg-1 col-2 my-auto">
                        <div class="task-icon rounded rounded-circle p-2 d-flex">
                            <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15" class="m-auto"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-11 col-10 task-title my-auto">
                        <h5>Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h5>
                        <p>Senin 20, Agustus 2022</p>
                    </div>
                </div>
            </div>
            <div class="card card-body list-task my-3">
                <div class="row">
                    <div class="col-lg-1 col-2 my-auto">
                        <div class="task-icon rounded rounded-circle p-2 d-flex">
                            <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15" class="m-auto"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-11 col-10 task-title my-auto">
                        <h5>Tugas : Mencatat Materi Bab 1</h5>
                        <p>Senin 20, Agustus 2022</p>
                    </div>
                </div>
            </div>
            <div class="card card-body list-task my-3">
                <div class="row">
                    <div class="col-lg-1 col-2 my-auto">
                        <div class="task-icon rounded rounded-circle p-2 d-flex">
                            <img src="{{ asset('assets/image/notes-icon.png') }}" width="15" height="15"
                                class="m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-lg-11 col-10 task-title my-auto">
                        <h5>Catatan : Merangkum Materi Bab 1</h5>
                        <p>Senin 20, Agustus 2022</p>
                    </div>
                </div>
            </div>
            <div class="card card-body list-task my-3">
                <div class="row">
                    <div class="col-lg-1 col-2 my-auto">
                        <div class="task-icon rounded rounded-circle p-2 d-flex">
                            <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15" class="m-auto"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-11 col-10 task-title my-auto">
                        <h5>Tugas : Membuat presentasi Materi Bab 1</h5>
                        <p>Senin 20, Agustus 2022</p>
                    </div>
                </div>
            </div>
            <div class="card card-body list-task my-3">
                <div class="row">
                    <div class="col-lg-1 col-2 my-auto">
                        <div class="task-icon rounded rounded-circle p-2 d-flex">
                            <img src="{{ asset('assets/image/notes-icon.png') }}" width="15" height="15"
                                class="m-auto" alt="">
                        </div>
                    </div>
                    <div class="col-lg-11 col-10 task-title my-auto">
                        <h5>Catatan : Merangkum Materi Bab 1</h5>
                        <p>Senin 20, Agustus 2022</p>
                    </div>
                </div>
            </div>
            <div class="card card-body list-task my-3">
                <div class="row">
                    <div class="col-lg-1 col-2 my-auto">
                        <div class="task-icon rounded rounded-circle p-2 d-flex">
                            <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15" class="m-auto"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-11 col-10 task-title my-auto">
                        <h5>Tugas : Membuat laporan Materi Bab 1</h5>
                        <p>Senin 20, Agustus 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

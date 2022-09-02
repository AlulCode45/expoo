@extends('template.app')
@section('content')
    <h3 class="fw-bolder font-mulish mb-3">Daftar Tugas</h3>
    <form action="#" method="POST">
        <select name="filter" id="filter" class="form-control">
            <option value="">Semua Kelas</option>
            <option value="">Bhs Indonesia</option>
            <option value="">Matematika</option>
            <option value="">Bhs Inggris</option>
        </select>
    </form>

    <div class="accordion mt-5">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fw-bold fw-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Hari ini ( 2 Tugas )
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card card-body shadow shadow-sm my-2">
                        <div class="row">
                            <div class="col-lg-1 col-2 my-auto">
                                <div class="task-icon rounded rounded-circle p-2 d-flex">
                                    <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15"
                                        class="m-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-11 col-10 task-title my-auto">
                                <h5>Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h5>
                                <p>Senin 20, Agustus 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body shadow shadow-sm my-2">
                        <div class="row">
                            <div class="col-lg-1 col-2 my-auto">
                                <div class="task-icon rounded rounded-circle p-2 d-flex">
                                    <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15"
                                        class="m-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-11 col-10 task-title my-auto">
                                <h5>Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h5>
                                <p>Senin 20, Agustus 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Minggu Ini ( 1 Tugas )
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card card-body shadow shadow-sm my-2">
                        <div class="row">
                            <div class="col-lg-1 col-2 my-auto">
                                <div class="task-icon rounded rounded-circle p-2 d-flex">
                                    <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15"
                                        class="m-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-11 col-10 task-title my-auto">
                                <h5>Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h5>
                                <p>Senin 20, Agustus 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Bulan Ini ( 0 Tugas )
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Tidak ada tugas</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Tanpa Batas Waktu ( 4 Tugas )
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card card-body shadow shadow-sm my-2">
                        <div class="row">
                            <div class="col-lg-1 col-2 my-auto">
                                <div class="task-icon rounded rounded-circle p-2 d-flex">
                                    <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15"
                                        class="m-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-11 col-10 task-title my-auto">
                                <h5>Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h5>
                                <p>Senin 20, Agustus 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body shadow shadow-sm my-2">
                        <div class="row">
                            <div class="col-lg-1 col-2 my-auto">
                                <div class="task-icon rounded rounded-circle p-2 d-flex">
                                    <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15"
                                        class="m-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-11 col-10 task-title my-auto">
                                <h5>Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h5>
                                <p>Senin 20, Agustus 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body shadow shadow-sm my-2">
                        <div class="row">
                            <div class="col-lg-1 col-2 my-auto">
                                <div class="task-icon rounded rounded-circle p-2 d-flex">
                                    <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15"
                                        class="m-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-11 col-10 task-title my-auto">
                                <h5>Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h5>
                                <p>Senin 20, Agustus 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body shadow shadow-sm my-2">
                        <div class="row">
                            <div class="col-lg-1 col-2 my-auto">
                                <div class="task-icon rounded rounded-circle p-2 d-flex">
                                    <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15"
                                        class="m-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-11 col-10 task-title my-auto">
                                <h5>Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h5>
                                <p>Senin 20, Agustus 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

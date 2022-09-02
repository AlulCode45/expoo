@extends('template.app')
@section('content')
    <div class="card card-view-class">
        <div class="card-header d-flex">
            <div class="my-auto">
                <h2 class="fw-bolder text-white">Tugas : Melengkapi pertanyaan Materi Bab 1 & Tuliskan di kertas</h2>
                <p class="fw-normal text-white">Bhs indonesia</p>
            </div>
        </div>
        <div class="card-body">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, nam aspernatur labore sunt doloremque autem
                tempore fugit maiores! Amet laboriosam eius temporibus architecto cupiditate ipsa exercitationem ex iste, id
                incidunt. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi nam tempora provident earum
                voluptatum, error iste nisi pariatur possimus expedita optio minus debitis deserunt delectus adipisci?
                Quidem nostrum fuga accusantium!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, nam aspernatur labore sunt doloremque autem
                tempore fugit maiores! Amet laboriosam eius temporibus architecto cupiditate ipsa exercitationem ex iste, id
                incidunt. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi nam tempora provident earum
                voluptatum, error iste nisi pariatur possimus expedita optio minus debitis deserunt delectus adipisci?
                Quidem nostrum fuga accusantium!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, nam aspernatur labore sunt doloremque autem
                tempore fugit maiores! Amet laboriosam eius temporibus architecto cupiditate ipsa exercitationem ex iste, id
                incidunt. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi nam tempora provident earum
                voluptatum, error iste nisi pariatur possimus expedita optio minus debitis deserunt delectus adipisci?
                Quidem nostrum fuga accusantium!
            </p>

            <div class="row mt-5">
                <div class="col-md-6 my-auto">
                    <form action="#" method="post">
                        <div class="input-group comment-form">
                            <input type="text" placeholder="Komentar ....." class="form-control rounded rounded-pill">
                            <div class="input-group-append d-flex submit-comment">
                                <button class="input-group-text rounded rounded-pill bg-transparent text-primary"><i
                                        class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="card card-body mt-4">
                        <h4>Tugas Anda</h4>
                        <div class="card card-body mt-2">
                            <div class="row">
                                <div class="col-10">
                                    <p>muhammad_khoyron_bhs_indo.pdf</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn-close position-absolute" disabled
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body mt-2">
                            <div class="row">
                                <div class="col-10">
                                    <p>muhammad_khoyron_bhs_indo.pdf</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn-close position-absolute" disabled
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <button class="btn btn-primary w-100 fw-bold">Serahkan</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-secondary text-white w-100 fw-bold">Tambah File</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

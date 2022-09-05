@extends('template.app')
@section('content')
    <div class="card card-view-class">
        <div class="card-header d-flex">
            <div class="my-auto">
                <h2 class="fw-bolder text-white">Tugas : {{ $task->title }}</h2>
                <p class="fw-normal text-white">{{ $subject->subjects_name }}</p>
            </div>
        </div>
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs justify-content-center mb-4" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tugas</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Siswa</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Nilai</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    {!! $task->body !!}
                    <div class="row mt-5">
                        <div class="col-md-8 my-auto">
                        </div>
                        <div class="col-md-4 my-auto">
                            <div class="card card-body mt-4">
                                <h4>Lampiran File</h4>
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
                                        <button class="btn btn-primary text-white w-100 fw-bold">Tambah File</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    <div class="table-responsive mt-3">
                        <table id="table-students" class="table table-striped table-bordered" style="width:100%">
                            <thead class="bg-main text-white">
                                <tr>
                                    <th>Foto Profil</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('assets/image/upload/' . $student->profile) }}"
                                                alt="" class="rounded">
                                        </td>
                                        <td>{{ $student->fullname }}</td>
                                        <td>{{ \App\Models\StudentModel::getClassByIdStudent($student->id) }}</td>
                                        <td>{{ $student->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                    tabindex="0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum."
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table-students').DataTable();
        });
    </script>
@endsection

@extends('template.app')
@section('content')
    <div class="card card-view-class">
        <div class="card-header d-flex">
            <div class="my-auto">
                <h1 class="fw-bolder text-white">{{ $subjectName }}</h1>
                <p class="fw-normal text-white">Kelas : <b>{{ $className }}</b></p>
            </div>
        </div>
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tugas Kelas</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Statistik</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="d-flex w-100 mt-3">
                        <div class="ms-auto">
                            <a href="{{ route('guru.add_task', $subject->id) }}"
                                class="btn btn-primary rounded rounded-pill"><i class="fa fa-plus"></i> Tugas</a>
                        </div>
                    </div>
                    @foreach ($listTasks as $task)
                        <div class="card card-body list-task my-3">
                            <a href="{{ route('guru.view_task', $task->id) }}" class="text-decoration-none text-dark">
                                <div class="row">
                                    <div class="col-lg-1 col-2 my-auto">
                                        <div class="task-icon rounded rounded-circle p-2 d-flex">
                                            <img src="{{ asset('assets/image/flag.png') }}" width="15" height="15"
                                                class="m-auto" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-10 task-title my-auto">
                                        <h5>{{ $task->title }}</h5>
                                        <p>{{ date('l', strtotime($task->created_at)) . ', ' . date('d-m-Y', strtotime($task->created_at)) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                    tabindex="0">
                    {{-- <table id="table-points" class="table table-striped table-bordered" style="width:100%">
                        <thead class="bg-main text-white">
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $('#table-students').DataTable();
            });
        </script>
    @endpush
@endsection

@extends('template.app')
@section('content')
    <h3 class="fw-bolder font-mulish mb-3">Semua kelas</h3>
    <div class="row row-cols-lg-3 row-cols-1">
        @foreach ($subjects as $subject)
            <div class="col my-2">
                <div class="card class-card shadow">
                    <a href="{{ route('lihat-kelas', $subject->id) }}" class="text-decoration-none">
                        <div class="card-header class-header d-flex">
                            <div class="row">
                                <div class="col-6 my-auto">
                                    <h4 class="text-white">{{ $subject->subjects_name }}</h4>
                                </div>
                                <div class="col-5">
                                    <img src="{{ asset('assets/image/indonesia-language.png') }}" height="95"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h6>
                            {{ $teacherModel->find($subject->teacher_id)->fullname }}
                        </h6>
                    </div>
                    <div class="card-footer d-flex">
                        <div class="ms-auto">
                            Jumlah soal : 20
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

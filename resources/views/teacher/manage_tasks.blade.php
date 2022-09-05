@extends('template.app')
@section('content')
    <div class="container">
        <h3 class="fw-bolder font-mulish mb-3">Kelola Kelas</h3>
        <div class="card card-body shadow">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead class="bg-main text-white">
                        <tr>
                            <th>Judul Tugas</th>
                            <th>Untuk Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->class_name }}</td>
                                <td>{{ $task->subjects_name }}</td>
                                <td>
                                    <p>{{ Str::substr($task->body, 0, 160) }} ...</p>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-primary m-1">
                                        <i class="fa fa-pencil-alt fs-6"></i>
                                    </a>
                                    <a href="#" class="btn btn-secondary m-1">
                                        <i class="fa fa-eye  fs-6"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger m-1">
                                        <i class="fa fa-trash fs-6"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    @endpush
@endsection

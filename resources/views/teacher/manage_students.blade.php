@extends('template.app')
@section('content')
    <div class="container">
        <h3 class="fw-bolder font-mulish mb-3">Kelola Siswa</h3>
        <div class="card card-body shadow">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead class="bg-main text-white">
                        <tr>
                            <th>Foto Profil</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('assets/image/upload/' . $student->profile) }}" alt=""
                                        class="rounded">
                                </td>
                                <td>{{ $student->fullname }}</td>
                                <td>{{ \App\Models\StudentModel::getClassByIdStudent($student->id) }}</td>
                                <td>{{ $student->email }}</td>
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

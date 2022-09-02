@extends('template.app')
@section('content')
    <div class="container">
        <h3 class="fw-bolder font-mulish mb-3">Tambah Tugas</h3>
        <div class="card card-body shadows">
            <form action="#" method="post" class="">
                <div class="form-group">
                    <label for="title">Judul Tugas</label>
                    <input type="text" name="task-title" placeholder="Judul Tugas" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="task-editor">Keterangan Tugas</label>
                    <textarea class="form-control" name="task-body" id="task-editor"></textarea>
                </div>
                <div class="form-group mt-3">
                    <div class="custom-file">
                        <label for="attachment">Attachment</label>
                        <input type="file" class="custom-file-input form-control" name="task-editor" id="task-editor-1">
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                ClassicEditor
                    .create(document.querySelector('#task-editor'))
                    .catch(error => {
                        console.error(error);
                    });
            });
        </script>
    @endpush
@endsection

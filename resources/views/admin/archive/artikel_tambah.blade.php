@extends('admin.themplate.master')

@section('title', 'Tambah Artikel')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Tambah Artikel')

@section('js')
<!-- summernote -->
<link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/summernote/summernote-bs4.css') !!}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section('content')

<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/artikel/store" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="card-body">

                  <div class="form-group">
                    <label for="Judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Ex. Judul">
                  </div>
                    <div class="form-group">
                    <label for="kategori">Kategori</label>

                    <select name="idkategori" class="form-control">
                    @foreach($kategori as $kategoridata)
                      <option value="{{ $kategoridata->kategori }}">{{ $kategoridata->kategori }}</option>
                    @endforeach
                     <select>
                  </div>


                </div>

                <div class="card-body">
                  <div class="form-group">
                    <label for="gambar">Thumbnail</label>

                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar"></label>
                      </div>

                    </div>

                  </div>
                  <div class="form-group">
                    <label for="file">file</label>

                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="file">
                        <label class="custom-file-label" for="file"></label>
                      </div>

                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="textarea" id="konten" name="konten" placeholder="Place some text here"
                              style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ajukan Artikel</button>
                  <a href="/admin/artikel/tambah-tanpa-file"><button type="button" class="btn btn-primary">Klik disini untuk artikel tanpa file</button></a>
                </div>
              </form>
            </div>
</div>
@endsection
@section('js2')
<!-- Summernote -->
<script src="{!! asset('assets/adminlte/plugins/summernote/summernote-bs4.min.js') !!}"></script>
<!-- bs-custom-file-input -->
<script src="{!! asset('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') !!}"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote(
        {  placeholder: "Let's write",
        height: 400,
        fontSizes: ['12', '14', '16', '18', '24', '36', '48'],
        toolbar: [
        ['fontname', ['fontname']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['picture', 'myvideo', 'link', 'table', 'hr']],
        ['misc', ['undo', 'redo']],
        ['view', ['fullscreen', 'codeview', 'help']]
        ],
        disableDragAndDrop: true,
        shortcut: false
        }
    )
  })
</script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
@stop

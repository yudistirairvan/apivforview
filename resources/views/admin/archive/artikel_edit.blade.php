@extends('admin.themplate.master')

@section('title', 'Edit Artikel')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Artikel')

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
              <form method="post" action="/admin/artikel/update/{{ $artikel->id }}" role="form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">

                  <div class="form-group">
                    <label for="Judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Ex. Judul" value="{{ $artikel->judul }}">
                  </div>

                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <!-- <input type="text" class="form-control" id="idkategori" name="idkategori" placeholder="Ex. Kategori" value="{{ $artikel->id_kategori }}"> -->
                    <select name="idkategori" class="form-control">
                    <option value="{{ $artikel->id_kategori }}">{{ $artikel->id_kategori }}</option>
                    @foreach($kategori as $kategoridata)

                    @if( $artikel->id_kategori!== $kategoridata->kategori )

                        <option value="{{ $kategoridata->kategori }}">{{ $kategoridata->kategori }}</option>
                        @continue
                    @endif
                    @endforeach
                     <select>
                  </div>


                </div>
                <!-- <div class="card-body">
                    <div class="form-group">
                    <label for="day">Day</label>
                    <input type="text" class="form-control" id="day" name="day" placeholder="Ex. Tanggal" value="{{ $artikel->day }}">
                  </div>
                  <div class="form-group">
                    <label for="month">Month</label>
                    <input type="text" class="form-control" id="month" name="month" placeholder="Ex. 08" value="{{ $artikel->month }}">
                  </div>
                  <div class="form-group">
                    <label for="year">year</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Ex. Year" value="{{ $artikel->year }}">
                  </div>

                </div> -->
                <!-- <div class="card-body">

                  <div class="form-group">
                    <label for="konten">Konten</label>
                    <input type="text" class="form-control" id="konten" name="konten" placeholder="Ex. Konten" value="{{ $artikel->konten }}">
                  </div>

                </div> -->
                <!-- <div class="card-body">
                  <div class="form-group">
                    <label for="gambar">Tumbnail</label>
                    <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Ex. gambar">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Upload file</button>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" value="{{ $artikel->gambar }}">
                        <label class="custom-file-label" for="gambar"></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="file">file</label>
                    <input type="text" class="form-control" id="file" name="file" placeholder="Ex. file">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="file" value="{{ $artikel->file }}" >
                        <label class="custom-file-label" for="file"></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                </div> -->

                <!-- <div class="card-body">
                    <div class="form-group">
                    <label for="gambar">gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Ex. gambar" value="{{ $artikel->gambar }}">
                  </div>
                  <div class="form-group">
                    <label for="file">file</label>
                    <input type="text" class="form-control" id="file" name="file" placeholder="Ex. file" value="{{ $artikel->file }}" >
                  </div>

                </div> -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="textarea" id="konten" name="konten"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $artikel->konten }}</textarea>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Perbaharui</button>
                  <a href="/admin/artikel/editgambar/{{ $artikel->id }}"><button type="button" class="btn btn-primary">Edit Gambar</button></a>
                  <a href="/admin/artikel/editfile/{{ $artikel->id }}"><button type="button" class="btn btn-primary">Edit File</button></a>
                </div>
              </form>
            </div>
            <!-- /.card -->


</div>
@endsection
@section('js2')
<!-- Summernote -->
<script src="{!! asset('assets/adminlte/plugins/summernote/summernote-bs4.min.js') !!}"></script>
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
        })
  })
</script>
@stop

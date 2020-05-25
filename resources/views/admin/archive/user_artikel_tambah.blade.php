@extends('themplate.master')

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
              <form method="post" action="/user/artikel/store" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
            
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="Judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Ex. Judul">
                  </div>
                    <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <!-- <input type="text" class="form-control" id="idkategori" name="idkategori" placeholder="Ex. Kategori"> -->
                    <select name="idkategori" class="form-control">
                    @foreach($kategori as $kategoridata)
                      <option value="{{ $kategoridata->kategori }}">{{ $kategoridata->kategori }}</option>
                    @endforeach
                     <select>
                  </div>
                
                  
                </div>
                <!-- <div class="card-body">
                    <div class="form-group">
                    <label for="day">Day</label>
                    <input type="text" class="form-control" id="day" name="day" placeholder="Ex. Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="month">Month</label>
                    <input type="text" class="form-control" id="month" name="month" placeholder="Ex. 08">
                  </div>
                  <div class="form-group">
                    <label for="year">year</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Ex. Year">
                  </div>
                  
                </div> -->
                <!-- <div class="card-body">
                    
                  <div class="form-group">
                    <label for="konten">Konten</label>
                    <input type="text" class="form-control" id="konten" name="konten" placeholder="Ex. Konten">
                  </div>
                  
                </div> -->
                <!-- <div class="card-body">
                
                </div> -->
                <!-- <div class="card-body">
                
                </div> -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="gambar">Tumbnail</label>
                    <!-- <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Ex. gambar"> -->
                    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Upload file</button> -->
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar"></label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div> -->
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="file">file</label>
                    <!-- <input type="text" class="form-control" id="file" name="file" placeholder="Ex. file"> -->
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="file">
                        <label class="custom-file-label" for="file"></label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div> -->
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
                </div>
              </form>
            </div>
            <!-- Modal -->
            <!-- <div id="uploadModal" class="modal fade" role="dialog">
                      <div class="modal-dialog"> -->

                        <!-- Modal content-->
                        <!-- <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">File upload Gambar</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                          </div>
                          <div class="modal-body"> -->
                            <!-- Form -->
                            <!-- <form method='post' action='' enctype="multipart/form-data">
                              Select file : <input type='file' name='file' id='file' class='form-control' ><br>
                              <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
                            </form> -->

                            <!-- Preview-->
                            <!-- <div id='preview'></div>
                          </div>
                    
                        </div>

                      </div>
                    </div> -->
            <!-- /.card -->

            

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
    $('.textarea').summernote()
  })
</script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
@stop
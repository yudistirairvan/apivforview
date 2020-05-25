@extends('themplate.master')

@section('title', 'Tambah Paket')
@section('logo', '../../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Tambah Paket')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/ads/paket/store" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="namapaket">Nama Paket</label>
                    <input type="text" class="form-control" id="namapaket" name="namapaket" placeholder="Paket A">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="jenispaket">Jenis Paket</label>
                    <input type="text" class="form-control" id="jenispaket" name="jenispaket" placeholder="Web/Ig">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="harga">Harga Paket</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="10000">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="deskripsi">Deskripsi Paket</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="xxx">
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


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Paket</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

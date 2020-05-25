@extends('themplate.master')

@section('title', 'Tambah Kategori')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Tambah Kategori')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/kategori/store" role="form">
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="namakategori">Kategori</label>
                    <input type="text" class="form-control" id="namakategori" name="namakategori" placeholder="Ex. Waralaba">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

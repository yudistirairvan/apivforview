@extends('themplate.master')

@section('title', 'Edit Kategori')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Kategori')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/kategori/update/{{ $kategori->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="form-group">
                    <label for="namakategori">Kategoti</label>
                    <input type="text" class="form-control" id="namakategori" name="namakategori" placeholder="Ex. Waralaba" value="{{ $kategori->kategori }}">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Kategori</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

@extends('themplate.master')

@section('title', 'Edit Paket')
@section('logo', '../../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Paket')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/ads/paket/update/{{ $paket->id }}" role="form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="form-group">
                    <label for="namapaket">Nama Paket</label>
                    <input type="text" class="form-control" id="namapaket" name="namapaket" placeholder="Paket A" value="{{ $paket->nama_paket }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="jenispaket">Jenis Paket</label>
                    <input type="text" class="form-control" id="jenispaket" name="jenispaket" placeholder="Web/Ig" value="{{ $paket->jenis_paket }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="harga">Harga Paket</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="10000" value="{{ $paket->harga }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="deskripsi">Deskripsi Paket</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="xxx" value="{{ $paket->deskripsi }}">
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

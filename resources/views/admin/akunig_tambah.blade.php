@extends('admin.themplate.master')

@section('title', 'Tambah Akun IG')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Tambah Akun IG')
@section('menudashboard', ' ')
@section('menuakun', 'menu active')
@section('menuuser', ' ')
@section('menupembukuan', ' ')
@section('menusatuan', ' ')
@section('menuborongan', ' ')

@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/akun/store" role="form">
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="namaakun">Nama / Username Akun</label>
                    <input type="text" class="form-control" id="namaakun" name="namaakun" placeholder="sukoharjokita">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="followers">Followers</label>
                    <input type="text" class="form-control" id="followers" name="followers" placeholder="70600">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="profilevisitor">Profile Visitor</label>
                    <input type="text" class="form-control" id="profilevisitor" name="profilevisitor" placeholder="8000">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Akun</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

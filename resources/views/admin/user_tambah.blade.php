@extends('admin.themplate.master')

@section('title', 'Tambah User')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Tambah User')
@section('menudashboard', ' ')
@section('menuakun', ' ')
@section('menuuser', 'menu active')
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
              <form method="post" action="/admin/user/store" role="form">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="nama@gmail.com">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="****">
                  </div>

                </div>
                <div class="card-body">
                <div class="form-group">
                    <label for="akunig">Akun Yang di tautkan</label>

                    <select name="akunig" class="form-control">
                    @foreach($akunig as $akunigdata)
                      <option value="{{ $akunigdata->id }}">{{ $akunigdata->NamaAkun }}</option>
                    @endforeach
                     <select>
                  </div>
                </div>
                <div class="card-body">
                <div class="form-group">
                    <label for="role">Role</label>

                    <select name="role" class="form-control">
                    
                      <option value="user">User</option>
                      <option value="super-admin">Super Admin</option>
             
                     <select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan User</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

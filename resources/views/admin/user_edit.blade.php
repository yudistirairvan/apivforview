@extends('admin.themplate.master')

@section('title', 'Edit Data User')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Data User')
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
              <form method="post" action="/admin/user/update/{{ $user->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{ $user->name }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="nama@gmail.com" value="{{ $user->email }}">
                  </div>

                </div>

                <div class="card-body">
                <div class="form-group">
                    <label for="akunig">Akun Yang di tautkan</label>

                    <select name="akunig" class="form-control">
                    @foreach($akunig as $akunigdata)
                      <option value="{{ $akunigdata->id }}" 
                          <?php if($user->id_ig == $akunigdata->id )
                          echo" selected='selected'";
                          ?>
                      >{{ $akunigdata->NamaAkun }}</option>
                    @endforeach
                     <select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit User Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

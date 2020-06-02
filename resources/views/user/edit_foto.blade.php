@extends('user.themplate.master')

@section('title', 'Profile')

@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')

@section('menu', 'Profile')
@section('menudashboard', ' ')
@section('menuuser', 'menu active')
@section('menulink', '')
@section('menulog', ' ')

@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>

              <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../images/users/{{ $user[0]->Picture }}" alt="User profile picture">
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/user/profile/update/foto" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

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
                  <button type="submit" class="btn btn-primary">Edit Foto Profile</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

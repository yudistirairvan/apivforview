@extends('user.themplate.master')

@section('title', 'Edit Data Link')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Data Link')
@section('menudashboard', ' ')
@section('menulink', 'menu active')
@section('menulog', ' ')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/user/link/update/{{ $link->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Video Mu" value="{{ $link->Judul }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="link">Id Video</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="X6k24kFTHiE" value="{{ $link->Link }}">
                  </div>

                </div>

                <!-- /.card-body -->
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Link</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

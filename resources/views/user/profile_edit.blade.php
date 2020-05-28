@extends('user.themplate.master')

@section('title', 'Profile')

@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
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
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/user/profile/update/{{ $profile[0]->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="{{ $profile[0]->LastName }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+62822xxx" value="{{ $profile[0]->Phone }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="channel">Channel Youtube</label>
                    <input type="text" class="form-control" id="channel" name="channel" placeholder="https://www.youtube.com/yudistirairvanpriyambudi" value="{{ $profile[0]->Chanellink }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Judul Video Mu" value="{{ $profile[0]->Instagramlink }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="fb">Facebook</label>
                    <input type="text" class="form-control" id="fb" name="fb" placeholder="Judul Video Mu" value="{{ $profile[0]->facebooklink }}">
                  </div>

                </div>
                
                <!-- /.card-body -->
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Profile</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

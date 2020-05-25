@extends('user.themplate.master')

@section('title', 'User Panel')
@section('logo', '../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'User Panel')
@section('content')


<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Link Youtube Ku</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="link" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<!-- ./col -->
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Log Ku</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="log" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<!-- ./col -->


@endsection

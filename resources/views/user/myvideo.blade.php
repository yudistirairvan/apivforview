@extends('user.themplate.master')

@section('title', 'My Video')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')

@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'My Video')
@section('menudashboard', ' ')
@section('menulink', 'menu active')
@section('menugetcoin', '')
@section('menulog', ' ')

@section('content')
<div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <!-- <div class="time-label">
                <span class="bg-red">10 Feb. 2014</span>
              </div> -->
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <div>
                <i class="fas fa-video bg-maroon"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                  <h3 class="timeline-header"><a href="#">{{ $user[0]->name ?? '' }} {{ $user[0]->LastName ?? '' }}</a> this your video {{ $myvideo->Judul }}  </h3>

                  <div class="timeline-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $myvideo->Link }}" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                  <div class="timeline-footer">
                    <a href="#" class="btn btn-sm bg-maroon">See comments</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>   

    
@endsection
@section('meta')

@stop
@section('js')


@stop

@section('js2')


@stop

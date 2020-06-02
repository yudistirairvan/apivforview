@extends('user.themplate.master')

@section('title', 'List Video')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')

@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'List Video')
@section('menudashboard', ' ')
@section('menulink', '')
@section('menugetcoin', 'menu active')
@section('menulog', ' ')

@section('content')
<div class="col-md-12">
 <!-- The time line -->
 <div class="timeline">
     
            @foreach($link as $linkdata)
                @php
                $date = $linkdata->created_at;
                $confert = substr($date , 0, 10);

                @endphp
                
          
               
                <!-- timeline time label -->
                <div class="time-label">
                    <span class="bg-red">{{ $confert}}</span>
                </div>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                  <h3 class="timeline-header"><a href="#">{{ $linkdata->name }}</a> Post a link</h3>
                  <div class="timeline-body">
                    Hi, yuk Lihat video {{ $linkdata->name }} yang berjudul <a href="/user/play/{{ $linkdata->id }}" > {{ $linkdata->Judul }} </a> dan dapatkan Koin Mu!
                    <br>
                    Video <a href="/user/play/{{ $linkdata->id }}" > {{ $linkdata->Judul }} </a>  memiliki sisa waktu {{ $linkdata->Waktu }} Menit Lagi.
                  </div>
                  <div class="timeline-footer">
                    <a href="/user/play/{{ $linkdata->id }}" class="btn btn-warning btn-sm">Mulai Tonton Video {{ $linkdata->name }} </a>
                  </div>
                </div>
              </div> 
              <!-- END timeline item -->
              <!-- timeline time label -->
                
          

            @endforeach
            

   
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
         

    
@endsection
@section('meta')

@stop
@section('js')


@stop

@section('js2')


@stop

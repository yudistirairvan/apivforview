@extends('user.themplate.master')

@section('title', 'Profile')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('menu', 'Profile')
@section('menudashboard', ' ')
@section('menuuser', 'menu active')
@section('menulink', '')
@section('menulog', ' ')

@section('content')
<div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../images/users/{{ $user[0]->Picture }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $user[0]->name }} {{ $user[0]->LastName }}</h3>

                <p class="text-muted text-center">{{ $user[0]->email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Saldo</b> <a class="float-right">{{ $user[0]->Saldo }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone </b> <a class="float-right">{{ $user[0]->Phone }}</a>
                  </li>
                 
                </ul>
                <a href="/user/profile/editfoto" class="btn btn-primary btn-block"><b>Edit Foto</b></a>
                <a href="/user/view" class="btn btn-primary btn-block"><b>Add  More Saldo</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">My Sosmed</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <strong><i class="fab fa-youtube mr-1"></i> Channel</strong>

                <p class="text-muted"> <a href="{{ $user[0]->Chanellink }}" target="new_tab">My Youtube</a>
                
                </p>

                <hr>
                
                <strong><i class="fab fa-instagram mr-1"></i> Instagram</strong>

                <p class="text-muted"><a href="{{ $user[0]->Instagramlink }}" target="new_tab">My Instagram</a></p>

                <hr>

                <strong><i class="fab fa-facebook-square mr-1"></i> Facebook</strong>

                <p class="text-muted">
                <a href="{{ $user[0]->facebooklink }} " target="new_tab">My Facebook</a>
                </p>

                <hr>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <!-- <li class="nav-item"><a class="nav-link " href="#activity" data-toggle="tab">Activity</a></li> -->
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane " id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="./../images/users/{{ $user[0]->Picture }}" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../assets/adminlte/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../assets/adminlte/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="../../assets/adminlte/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../assets/adminlte/img/photo2.png" alt="Photo">
                              <img class="img-fluid" src="../../assets/adminlte/img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../assets/adminlte/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="../../assets/adminlte/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane active" id="timeline">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">

                  @foreach($links as $linkdata)
                    @php
                    $date = $linkdata->created_at;
                    $confert = substr($date , 0, 10);
                    $time = substr($date , 10, 10);
                    @endphp

                      
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          {{ $confert }}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-video bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $time }}</span>

                          <h3 class="timeline-header"><a href="#">Post A link</a> Duration {{ $linkdata->Waktu }}</h3>

                          <div class="timeline-body">
                            Your Video {{ $linkdata->Judul }} 
                          </div>
                          <div class="timeline-footer">
                            <a href="/user/video/{{ $linkdata->id }}" class="btn btn-primary btn-sm">Check The Video</a>
                            <a href="/user/myprofile/delete/{{ $linkdata->id }}" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                  @endforeach


                    
                      
                      
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="post" action="/user/profile/update/user/{{ $user[0]->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label" >First Name</label>
                        <div class="col-sm-10">
                          <input id="name" name="name" type="text" class="form-control"  placeholder="First Name" value="{{ $user[0]->name }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="lastname" class="col-sm-2 col-form-label" >Last Name</label>
                        <div class="col-sm-10">
                          <input id="lastname" name="lastname" type="text" class="form-control"  placeholder="First Name" value="{{ $user[0]->LastName }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" disabled value="{{ $user[0]->email }}">
                        </div>
                      </div>
                      
                    <div class="form-group row">
                      <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="+62822xxx" value="{{ $user[0]->Phone }}">
                      </div>
                    </div>

                
                    <div class="form-group row">
                      <label for="channel" class="col-sm-2 col-form-label">Channel Youtube</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="channel" name="channel" placeholder="https://www.youtube.com/yudistirairvanpriyambudi" value="{{ $user[0]->Chanellink }}">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Judul Video Mu" value="{{ $user[0]->Instagramlink }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fb" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="fb" name="fb" placeholder="Judul Video Mu" value="{{ $user[0]->facebooklink }}">
                      </div>
                    </div>



                     
                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

@endsection

@extends('themplate.master')

@section('title', 'Edit User')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit User')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/user/update/{{ $datauser->id }}" role="form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
            
                <div class="card-body">
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="nama" placeholder="Ex. Yudistira" value="{{ $datauser->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Ex. Yudistira@gmail.com" value="{{ $datauser->email }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="****" value="{{ $datauser->password }}">
                  </div>
                  <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="hakakses" class="form-control" ">
                          <option value="{{ $datauser->hak_akses }}">{{ $datauser->hak_akses }}</option>
                          <option value="Admin">admin</option>
                          <option value="verifikator">verifikator</option>
                          <option value="user">user</option>
                         
                        </select>
                    </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit User</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

</div>
@endsection
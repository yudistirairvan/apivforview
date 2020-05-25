@extends('admin.themplate.master')

@section('title', 'Edit Data')
@section('logo', '../../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Data')
@section('menudashboard', ' ')
@section('menuakun', ' ')
@section('menuuser', ' ')
@section('menupembukuan', 'menu-open')
@section('menusatuan', 'menu active')
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
              <form method="post" action="/admin/pp/satuan/updatesatuan/{{ $satuan->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="10000" value="{{ $satuan->Jumlah }}">
                  </div>

                </div>


                
                <div class="card-body">
                <div class="form-group">
                    <label for="via">Via</label>

                    <select name="via" class="form-control">
                      <option                        
                      <?php if ($satuan->Via == 'Transfer' ) echo 'selected' ; ?>
                      value="Transfer"
                      >Transfer</option>
                      <option 
                      <?php if ($satuan->Via == 'Pulsa' ) echo 'selected' ; ?>
                      value="Pulsa" 
                      >Pulsa</option>
                     <select>
                  </div>
                </div>

                
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

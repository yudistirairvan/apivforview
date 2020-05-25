@extends('admin.themplate.master')

@section('title', 'Tambah Satuan')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Tambah Satuan ')
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
              <form method="post" action="/admin/pp/satuan/storesatuan" role="form">
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="10000">
                  </div>

                </div>


                
                <div class="card-body">
                <div class="form-group">
                    <label for="via">Via</label>

                    <select name="via" class="form-control">
                      <option value="Transfer">Transfer</option>
                      <option value="Pulsa">Pulsa</option>
                     <select>
                  </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection

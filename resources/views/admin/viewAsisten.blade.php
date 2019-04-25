         @if(Auth::user())
         @else

<?php
    return view('layouts/home');

    ?>

    @endif
@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <h1 style="float: left;">
      Asisten
      <small>List</small>
    </h1>
    <form action="{{ url('queryAsisten') }}" method="GET">
      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 200px; float: right">
          <input type="text" name="q" class="form-control pull-right validate" placeholder="Search">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>

    <!--   <div class="box-tools">
        <a href="/admin/viewAsisten" class="btn btn-warning" style="float: right; margin-right: 20px">
          Tampilkan Semua
        </a>
      </div> -->
      <div class="box-tools">
        <div class="dropdown" style="float: right; margin-right: 20px">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            Pilih Divisi
          </button>
          <div class="dropdown-menu">
            <a  href="/admin/viewAsisten/web">web</a>
            <a  href="/admin/viewAsisten/voip">voip</a>
            <a  href="/admin/viewAsisten/ids">ids</a>
            <a  href="/admin/viewAsisten/gis">gis</a>
            <a  href="/admin/viewAsisten/iv">iv</a>
            <a  href="/admin/viewAsisten/gametech">gametech</a>
          </div>
        </div>
      </div>
      <!-- <div class="box-tools">
        <div class="dropdown" style="float: right; margin-right: 20px">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Pilih Brand
          </button>
          <div class="dropdown-menu">
            <a  href="/admin/viewAsisten/canon">Canon</a>
            <a  href="/admin/viewAsisten/nikon">Nikon</a>
            <a  href="/admin/viewAsisten/sony">Sony</a>
            <a  href="/admin/viewAsisten/samsung">Samsung</a>
            <a  href="/admin/viewAsisten/goPro">GoPro</a>
          </div>
        </div>
      </div> -->
    </form>
  </div>

  <!-- Main content -->
  <section class="content">
      
    <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <!-- /.box-header -->
            <div class=" table-responsive">
              <table class="table table-hover">
                <thead style="background-color: #0E2231; color: white;">
                  <tr>
                    <th>Id</th>
                    <th>nama</th>
                    <th>panggilan</th>
                    <th>jurusan</th>
                    <th>asal</th>
                    <th>divisi</th>
                    <th>Foto</th>
                    <!-- <th>Lihat</th> -->
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                @foreach($asistens as $asisten)
                  <tbody>
                    <tr>


                      <td>{{$asisten->id_user}}</td>
                      <td>{{$asisten->nama}}</td>
                      <td>{{$asisten->panggilan}}</td>
                      <td>{{$asisten->jurusan}}</td>
                      <td>{{$asisten->asal}}</td>
                      <td>{{$asisten->divisi}}</td>
                    {{--   <td>{{$asisten->foto}}</td> --}}
                      <td><img src="{{URL::to('/image/'.$asisten->gambar)}}" alt="" width="140px" height="80px"></td>

                       <!-- <td><a href="/admin/lihatAsisten/{{$asisten->id_user}}" class="btn btn-primary"><i class=" fa fa-eye"></i></a></td> -->
                      <td><a href="/admin/editAsisten/{{$asisten->id_user}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                      <td><a href="/admin/deleteAsisten/{{$asisten->id_user}}" class="btn btn-danger"><i class=" fa fa-trash"></i></a></td>
                    </tr>
                  </tbody>
                @endforeach

               
              </table>
            </div>
                 
            
          </div>
        
        </div>
    </div>  

  </section>

</div>
@endsection
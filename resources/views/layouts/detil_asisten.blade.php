@extends('layouts/template2')
    
  @section('title', 'Detil Item')

  @section('content')
    <br>
    <br>
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Row -->
      <div class="row" style="margin-top: 20px">

        <div class="col-md-8 text-center">
<img src="{{ URL::to('/image/' . $asistens->gambar) }}" width="500" height="350"  />
        </div>


        <div>
         <!-- Berdasar Kondisi -->
                   @if($asistens->divisi=='web')
                  <div class="alert alert-success alert-product" id="web">
                    <strong>web</strong>
                  </div>
                  @elseif($asistens->divisi=='voip')
                  <div class="alert alert-success alert-product" id="voip">
                    <strong>voip</strong>
                  </div>
                  @elseif($asistens->divisi=='ids')
                  <div class="alert alert-success alert-product" id="ids">
                    <strong>ids</strong>
                  </div>
                  @elseif($asistens->divisi=='gametech')
                  <div class="alert alert-success alert-product" id="gametech">
                    <strong>gametech</strong>
                  </div>
                  @elseif($asistens->divisi=='gis')
                  <div class="alert alert-success alert-product" id="gis">
                    <strong>gis</strong>
                  </div>
                  @else
                  <div class="alert alert-success alert-product" id="iv">
                    <strong>iv</strong>
                  </div>
                  @endif


          <h1 class="my-3" style="margin-bottom: 1rem; color: #3E2723">{{$asistens->nama}}</h1>

          <h1 class="my-3" style="margin-bottom: 1rem; color: #3E2723">{{$asistens->panggilan}}</h1>

          <h4 class="my-3">jurusan</h4>
          <p>{{ $asistens->jurusan }}</p>
          <h4 class="my-3">asal</h4>
          <p>{{ $asistens->asal }}</p>
          <br>
        </div>

      </div>
      <!-- /.row -->

     

    </div>
  @endsection

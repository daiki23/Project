@extends('layouts/template2')
    
  @section('title', 'Sewa')

  @section('content')
    <div class="container" style="margin-top: 60px;">

      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/home">Home</a>
        </li>
        <li class="breadcrumb-item active">Sewa</li>
      </ol> -->

      <!-- Page Heading/Breadcrumbs -->
      <div class="row text-center">
        <div class="col-lg-10 mx-auto">
          <h2>Calon Asisten A&S 2019</h2>
          <br>
        </div>

        <form action="{{ url('searchAsisten') }}" method="GET" class="col-md-5 col-lg-3 col-xl-4 mx-auto">
            <div class="box-tools">
              <div class="input-group input-group-sm">
                <input type="text" name="q" class="form-control pull-right validate" placeholder="Cari asisten" style="width: 500px; height: 40px">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>

            </div>
        </form>
 <div class="col-lg-12 col-md-12">
        <span style="padding-top: 10px" class="col-md-2">
                <a class="btn btn-block btn-lg btn-success" href="/sewa/asisten/tersedia">web</a>
              </span>
              <span style="padding-top: 10px" class="col-md-2">
                <a class="btn btn-block btn-lg btn-danger" href="/sewa/asisten/tidak_tersedia">voip</a>
              </span>
              <span style="padding-top: 10px" class="col-md-2">
                <a class="btn btn-block btn-lg btn-success" href="/sewa/asisten/tidak_tersedia">ids</a>
              </span>
              <span style="padding-top: 10px" class="col-md-2">
                <a class="btn btn-block btn-lg btn-danger" href="/sewa/asisten/tidak_tersedia">gametech</a>
              </span>
              <span style="padding-top: 10px" class="col-md-2">
                <a class="btn btn-block btn-lg btn-success" href="/sewa/asisten/tidak_tersedia">iv</a>
              </span>
              <span style="padding-top: 10px" class="col-md-2">
                <a class="btn btn-block btn-lg btn-danger" href="/sewa/asisten/tidak_tersedia">ids</a>
              </span>


      </div>
      </div>

     

      <div class="row">
        <div class="product-top" style="margin-bottom: 50px">
            <div class="product-one">
              @foreach($hasil as $asisten)

              <div class="col-md-3 product-left">
                <div class="product-main product-main-alert simpleCart_shelfItem">

                  <!-- Berdasar Kondisi -->
                   @if($asisten->divisi=='web')
                  <div class="alert alert-success alert-product" id="web">
                    <strong>web</strong>
                  </div>
                  @elseif($asisten->divisi=='voip')
                  <div class="alert alert-success alert-product" id="voip">
                    <strong>voip</strong>
                  </div>
                  @elseif($asisten->divisi=='ids')
                  <div class="alert alert-success alert-product" id="ids">
                    <strong>ids</strong>
                  </div>
                  @elseif($asisten->divisi=='gametech')
                  <div class="alert alert-success alert-product" id="gametech">
                    <strong>gametech</strong>
                  </div>
                  @elseif($asisten->divisi=='gis')
                  <div class="alert alert-success alert-product" id="gis">
                    <strong>gis</strong>
                  </div>
                  @else
                  <div class="alert alert-success alert-product" id="iv">
                    <strong>iv</strong>
                  </div>
                  @endif
                  <a class="mask" href="/detil/asisten/{{$asisten->id_user}}">

 
<img class="img-responsive zoom-img" src="{{ URL::to('/image/' . $asisten->gambar) }}"   />

                  </a>


                  <div class="product-bottom text-center">
                    <h3>{{ $asisten->nama }}</h3>
                    <p>{{ $asisten->panggilan }}</p>
                    <h4><span class=" item_price">{{ $asisten->divisi }}</span></h4>
                  </div>


                </div>
              </div>
              @endforeach

              <div class="clearfix"></div>
            </div>   
          </div>

      </div>
    </div>
  @endsection

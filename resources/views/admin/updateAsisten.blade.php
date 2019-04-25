          @if(Auth::user())
         @else

<?php
    return view('layouts/home');

    ?>

    @endif

 @extends('admin.layouts.app')

@section('main-content')




 <div class="content-wrapper">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Asisten</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="update/{{$asisten->id_user}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
                  {{method_field('patch')}}
                 <input type="hidden" name="_token" value="{{csrf_token()}}">
                


               
          <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" rows="6" id="nama" name="nama" placeholder="Masukkan nama"  required value=" {{$asisten->nama}} "></input>
                </select>
              </div>

              <div class="form-group">
                <label for="panggilan">panggilan</label>
                <input type="text" class="form-control" rows="6" id="panggilan" name="panggilan" placeholder="Masukkan nama panggilan"  required value="{{$asisten->panggilan}}"></input>
                </select>
              </div>

              <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input type="text" class="form-control" rows="6" id="jurusan" name="jurusan" placeholder="Masukkan jurusan"  required value="{{$asisten->jurusan}}"></input>
                </select>
              </div>

              <div class="form-group">
                <label for="asal">asal</label>
                <input type="text" class="form-control" rows="6" id="asal" name="asal" placeholder="Masukkan asal"  required value="{{$asisten->asal}}"></input>
                </select>
              </div>

               <div class="form-group">
                <label for="divisi">Divisi</label>
                <select class="form-control select2" style="width: 100%;" name="divisi" id="divisi" required>
                  <?php if ($asisten->divisi=='web'): ?>
                  <option  value="web">{{$asisten->divisi}}</option>
                  <option value="ids">ids</option>
                  <option value="gis">gis</option>
                  <option value="gametech">gametech</option>
                  <option value="voip">voip</option>
                  <option value="iv">iv</option>
                 
                   <?php elseif ($asisten->divisi=='ids'): ?>
                  <option  value="ids">{{$asisten->divisi}}</option>
                  <option value="web">web</option>
                  <option value="gis">gis</option>
                  <option value="gametech">gametech</option>
                  <option value="voip">voip</option>

                    <?php elseif ($asisten->divisi=='gis'): ?>
                  <option  value="gis">{{$asisten->divisi}}</option>
                  <option value="ids">ids</option>
                  <option value="web">web</option>
                  <option value="gametech">gametech</option>
                  <option value="voip">voip</option>
                  <option value="iv">iv</option>

                    <?php elseif ($asisten->divisi=='gametech'): ?>
                  <option  value="gametech">{{$asisten->divisi}}</option>
                  <option value="ids">ids</option>
                  <option value="gis">gis</option>
                  <option value="web">web</option>
                  <option value="voip">voip</option>
                  <option value="iv">iv</option>

                    <?php elseif ($asisten->divisi=='voip'): ?>
                  <option  value="voip">{{$asisten->divisi}}</option>
                  <option value="ids">ids</option>
                  <option value="gis">gis</option>
                  <option value="gametech">gametech</option>
                  <option value="web">web</option>
                  <option value="iv">iv</option>


                  <?php elseif ($asisten->divisi=='iv'): ?>
                  <option  value="iv">{{$asisten->divisi}}</option>
                  <option value="ids">ids</option>
                  <option value="gis">gis</option>
                  <option value="gametech">gametech</option>
                  <option value="web">web</option>
                  <option value="voip">voip</option>

                 <?php endif ?>
                 
                </select>
              </div>


                <div class="form-group">
                  <label for="gambar">Masukkan Foto</label>
                  <input type="file" id="gambar" name="gambar">
                  <br>
                  <img src="{{URL::to('/image/'.$asisten->gambar)}}" alt="" width="100px" height="100px">

                 
                </div>


                 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="submit" value="submit">Submit</button>
              </div>
            </form>
          </div>
</div>
          @endsection
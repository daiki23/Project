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
       <form action="storeAsisten" method="post" enctype="multipart/form-data">
              <div class="box-body">
          
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                


               
          <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" rows="6" id="nama" name="nama" placeholder="Masukkan nama"  required></input>
                </select>
              </div>

              <div class="form-group">
                <label for="panggilan">panggilan</label>
                <input type="text" class="form-control" rows="6" id="panggilan" name="panggilan" placeholder="Masukkan nama panggilan"  required></input>
                </select>
              </div>

              <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input type="text" class="form-control" rows="6" id="jurusan" name="jurusan" placeholder="Masukkan jurusan"  required></input>
                </select>
              </div>

              <div class="form-group">
                <label for="asal">asal</label>
                <input type="text" class="form-control" rows="6" id="asal" name="asal" placeholder="Masukkan asal"  required></input>
                </select>
              </div>

               <div class="form-group">
                <label for="divisi">Divisi</label>
                <select class="form-control select2" style="width: 100%;" name="divisi" id="divisi" required>
                  <option selected="selected" value="web">web</option>
                  <option value="voip">voip</option>
                  <option value="gis">gis</option>
                  <option value="ids">ids</option>
                  <option value="gametech">gametech</option>
                  <option value="iv">IV(Interactive Video)</option>
                 
                </select>
              </div>


                <div class="form-group">
                  <label for="gambar">Masukkan Foto</label>
                  <input type="file" id="gambar" name="gambar" required>

                 
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
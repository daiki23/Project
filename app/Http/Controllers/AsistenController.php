<?php

namespace App\Http\Controllers;

use App\asisten;
use Illuminate\Http\Request;

use Input; # untuk inputan

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error)

use DB;

class AsistenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function insertAsisten()
    {
        //
        return view('admin/insertAsisten');
    }

       public function viewAsisten()
    {
        //
         // $kameras = DB::table('tb_kamera')->get();
        $asistens = asisten::all();
        return view('admin/viewAsisten',compact('asistens'));
    }

     public function storeAsisten(Request $request)
    {
        //
        // dd($request-> all()); 
        #--> untuk mengetes apakah bisa di store apa tidak

        // $kamera = new kamera;
        // $kamera->merk=Input::get("merk");
        //  $kamera->tipe=Input::get("tipe");
        // $kamera->deskripsi=Input::get("deskripsi");
        // $kamera->fitur=Input::get("fitur");
        //   $kamera->status=Input::get("status");
        // $kamera->harga_sewa=Input::get("harga_sewa");
      

        // if(Input::hasFile("gambar")){
        //     $files = Input::file("gambar");
        //     $merk = time()."_".$files->getClientOriginalName();
        //     $image = $files->move(public_path().'/image',$merk);
        //     $kamera->gambar=$merk;
        // }
        // $kamera->save();
        // return redirect('/admin/viewCamera');

        $asisten = new asisten;
        $asisten->nama=Input::get("nama");
         $asisten->panggilan=Input::get("panggilan");
        $asisten->jurusan=Input::get("jurusan");
        $asisten->asal=Input::get("asal");
          $asisten->divisi=Input::get("divisi");
    
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $nama = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$nama);
            $asisten->gambar=$nama;
        }
        $asisten->save();
        return redirect('/admin/viewAsisten');
    }

   public function show($id_user)
    {
        //
        $asistens = DB::table("asistens")->where('id_user',$id_user)->first();
        // $user = customer::find($id);
        return view('admin/detilCamera',compact('kameras'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user)
    {
        //
        
          $asisten = DB::table("asistens")->where('id_user',$id_user)->first();
        
          return view('admin/updateAsisten')->with(compact('asisten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
        

        $asisten = asisten::find($id_user);
  
        $asisten->nama=Input::get("nama");
         $asisten->panggilan=Input::get("panggilan");
        $asisten->jurusan=Input::get("jurusan");
        $asisten->asal=Input::get("asal");
          $asisten->divisi=Input::get("divisi");
    
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $nama = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$nama);
            $asisten->gambar=$nama;
        }
        $asisten->save();
        return redirect('/admin/viewAsisten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        //
           // $kamera = kamera::find($id_kamera);
       $asisten = DB::table("asistens")->where('id_user',$id_user);
        $asisten->delete();
        return redirect('/admin/viewAsisten');
    }

    //    Method untuk mengambil status barang
    public function show_ids()
    {
        $asistens = DB::table('asistens')->where('divisi', 'ids')->get();

        return view('admin/viewAsisten', ['asistens' => $asistens]);
    }

    public function show_voip()
    {
        $asistens = DB::table('asistens')->where('divisi', 'voip')->get();

        return view('admin/viewAsisten', ['asistens' => $asistens]);
    }

    //    Method untuk mengambil nama merk
    public function show_web()
    {
        $asistens = DB::table('asistens')->where('divisi', 'web')->get();

        return view('admin/viewAsisten', ['asistens' => $asistens]);
    }

    public function show_gis()
    {
        $asistens = DB::table('asistens')->where('divisi', 'gis')->get();

        return view('admin/viewAsisten', ['asistens' => $asistens]);
    }

    public function show_gametech()
    {
        $asistens = DB::table('asistens')->where('divisi', 'gametech')->get();

        return view('admin/viewAsisten', ['asistens' => $asistens]);
    }

    public function show_iv()
    {
        $asistens = DB::table('asistens')->where('divisi', 'iv')->get();

        return view('admin/viewAsisten', ['asistens' => $asistens]);
    }

}

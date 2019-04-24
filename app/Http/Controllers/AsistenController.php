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
        return view('admin/insertCamera');
    }

       public function viewAsisten()
    {
        //
         // $kameras = DB::table('tb_kamera')->get();
        $kameras = kamera::all();
        return view('admin/viewCamera',compact('kameras'));
    }

     public function storeAsisten(Request $request)
    {
        //
        // dd($request-> all()); 
        #--> untuk mengetes apakah bisa di store apa tidak

        $kamera = new kamera;
        $kamera->merk=Input::get("merk");
         $kamera->tipe=Input::get("tipe");
        $kamera->deskripsi=Input::get("deskripsi");
        $kamera->fitur=Input::get("fitur");
          $kamera->status=Input::get("status");
        $kamera->harga_sewa=Input::get("harga_sewa");
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $merk = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$merk);
            $kamera->gambar=$merk;
        }
        $kamera->save();
        return redirect('/admin/viewCamera');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function show(asisten $asisten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function edit(asisten $asisten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asisten $asisten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function destroy(asisten $asisten)
    {
        //
    }
}

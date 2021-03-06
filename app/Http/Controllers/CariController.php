<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aksesoris;
use App\kamera;
use App\lensa;
use App\wishlist;
use App\contact;
use App\asisten;



class CariController extends Controller
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

    public function searchAsisten(Request $request)
    {
        $query = $request->get('q');
        $hasil = asisten::where('divisi', 'LIKE', '%' . $query . '%')->orWhere('nama','LIKE','%'.$query.'%')->orWhere('panggilan','LIKE','%'.$query.'%')->orWhere('id_user','LIKE','%'.$query.'%')->paginate(10);
     

        return view('admin/resultAsisten',compact('hasil','query'));
    }


    public function searchKamera(Request $request)
    {
        $query = $request->get('q');
        $hasil = kamera::where('merk', 'LIKE', '%' . $query . '%')->orWhere('tipe','LIKE','%'.$query.'%')->orWhere('id_kamera','LIKE','%'.$query.'%')->paginate(10);
     

        return view('admin/resultAsisten',compact('hasil','query'));
    }




        public function searchLensa(Request $request)
    {
        $query =  $request->get('q');
        $hasil = lensa::where('merk','LIKE','%'.$query.'%')->orWhere('tipe','LIKE','%'.$query.'%')->orWhere('id_lensa','LIKE','%'.$query.'%')->paginate(10);

        return view('admin/resultLensa',compact('hasil','query'));
    }

        public function searchAksesoris(Request $request)
    {
        $query =  $request->get('q');
        $hasil = aksesoris::where('jenis','LIKE','%'.$query.'%')->orWhere('tipe','LIKE','%'.$query.'%')->orWhere('id','LIKE','%'.$query.'%')->paginate(10);

        return view('/admin/resultAksesoris',compact('hasil','query'));
    }

    public function homeAsisten(Request $request)
    {
          $query = $request->get('q');
        $hasil = asisten::where('divisi', 'LIKE', '%' . $query . '%')->orWhere('nama','LIKE','%'.$query.'%')->orWhere('panggilan','LIKE','%'.$query.'%')->orWhere('id_user','LIKE','%'.$query.'%')->paginate(10);
     
        return view('/layouts/result_asisten',compact('hasil','query'));
    }

        public function homeKamera(Request $request)
    {
        $query = $request->get('q');
        $hasil = kamera::where('merk', 'LIKE', '%' . $query . '%')->orWhere('tipe','LIKE','%'.$query.'%')->paginate(10);
     

        return view('/layouts/result_sewaKamera',compact('hasil','query'));
    }


          public function homeLensa(Request $request)
        {
        $query = $request->get('q');
        $hasil = lensa::where('merk', 'LIKE', '%' . $query . '%')->orWhere('tipe','LIKE','%'.$query.'%')->paginate(10);
     

        return view('/layouts/result_sewaLensa',compact('hasil','query'));
    }

          public function homeAksesoris(Request $request)
    {
        $query = $request->get('q');
        $hasil = aksesoris::where('jenis', 'LIKE', '%' . $query . '%')->orWhere('tipe','LIKE','%'.$query.'%')->paginate(10);
     

        return view('/layouts/result_sewaAksesoris',compact('hasil','query'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

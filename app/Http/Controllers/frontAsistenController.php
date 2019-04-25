<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontAsistenController extends Controller
{
    public function index()
    {
        $asistens = DB::table('asistens')->get();

        return view('layouts/front_asisten', ['asistens' => $asistens]);
    }

     public function show_ids()
    {
        $asistens = DB::table('asistens')->where('divisi', 'ids')->get();

        return view('layouts/front_asisten', ['asistens' => $asistens]);
    }

    public function show_voip()
    {
        $asistens = DB::table('asistens')->where('divisi', 'voip')->get();

        return view('layouts/front_asisten', ['asistens' => $asistens]);
    }

    //    Method untuk mengambil nama merk
    public function show_web()
    {
        $asistens = DB::table('asistens')->where('divisi', 'web')->get();

        return view('layouts/front_asisten', ['asistens' => $asistens]);
    }

    public function show_gis()
    {
        $asistens = DB::table('asistens')->where('divisi', 'gis')->get();

        return view('layouts/front_asisten', ['asistens' => $asistens]);
    }

    public function show_gametech()
    {
        $asistens = DB::table('asistens')->where('divisi', 'gametech')->get();

        return view('layouts/front_asisten', ['asistens' => $asistens]);
    }

    public function show_iv()
    {
        $asistens = DB::table('asistens')->where('divisi', 'iv')->get();

        return view('layouts/front_asisten', ['asistens' => $asistens]);
    }

    public function detil_asisten($id_user)
    {
        $asistens = DB::table('asistens')->where('id_user', $id_user)->first();

        return view('layouts/detil_asisten', compact('asistens'));
    }
}

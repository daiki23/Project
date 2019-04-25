<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class asisten extends Model
{
    //

    protected $fillable = ['nama','panggilan','jurusan','asal','divisi','gambar'];

     protected $primaryKey = 'id_user';
}

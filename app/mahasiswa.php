<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table ='mahasiswa';
    protected $fillable = ['Nama', 'Nim', 'email','jurusan','alamat','IPK','tipe','DPA'];

    
}

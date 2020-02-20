<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsentrasi extends Model
{
    protected $table = 'konsentrasi';
    protected $fillable = ['mahasiswa_id','nama_jalur','nilai'];

    public function mahasiswa() 
    {
        return $this->belongsTo('App\mahasiswa');
    }
}

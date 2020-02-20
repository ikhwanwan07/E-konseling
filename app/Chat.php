<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table ='chat';
    protected $fillable= ['mahasiswa_id','dosen_id','subjek','pesan'];

    public function mahasiswa() 
    {
        return $this->belongsTo('App\mahasiswa');
    }
    public function dosen() 
    {
        return $this->belongsTo('App\dosen');
    }
    public function balas() 
    {
        return $this->hasMany('App\Balas');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table ='mahasiswa';
    protected $fillable = ['Nama', 'Nim', 'email','jurusan','alamat','IPK','tipe_id','dosen_id','user_id'];

    public function dosen() 
    {
        return $this->belongsTo('App\dosen');
    }
    public function tipe() 
    {
        return $this->belongsTo('App\tipe');
    }
    public function ipk() 
    {
        return $this->hasMany('App\IPK');
    }
    public function konsentrasi() 
    {
        return $this->hasMany('App\Konsentrasi');
    }
    public function pesan() 
    {
        return $this->hasMany('App\Chat');
    }
    
    public function matkul() 
    {
        return $this->belongsToMany('App\Matkul')->withPivot(['nilai']);
    }

    
}

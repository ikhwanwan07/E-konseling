<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{

    protected $table = 'jadwal';
    protected $fillable = ['hari','jam'];



    public function dosen(){
        return $this->belongsTo('App\dosen');
    }
}

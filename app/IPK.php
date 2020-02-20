<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPK extends Model
{
    protected $table= 'ipk';
    protected $fillable = ['mahasiswa_id','tahun_ajaran','semester','ipk'];

    public function mahasiswa(){
        return $this->belongsTo('App\mahasiswa');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table='tipe';

    public function mahasiswa(){
       
        
        return $this->hasOne('App\mahasiswa');
    }
}

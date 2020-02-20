<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';

    public function mahasiswa() 
    {
        return $this->belongsToMany('App\mahasiswa')->withPivot(['nilai']);
    }
}

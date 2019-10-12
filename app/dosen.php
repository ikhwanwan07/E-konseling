<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table ='dosen';
    protected $fillable = ['user_id','Nama','email' ,'NIP', 'HP'];

}


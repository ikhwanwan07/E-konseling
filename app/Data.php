<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = "data";
    public $timestamps = false;
 
    protected $fillable = ['nama','nim','ipk_sem_1','ipk_sem_2','ipk_sem_3','ipk_sem_4','ipk_sem_5'];
}

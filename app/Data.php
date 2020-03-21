<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = "data";
 
    protected $fillable = ['nama','nim','ipk1','ipk2','ipk3','ipk4','ipk5'];
}

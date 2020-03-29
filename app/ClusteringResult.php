<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClusteringResult extends Model
{
    protected $table = "clustering_result";
    public $timestamps = false;
 
    protected $fillable = ['nim','ipk_sem_1','ipk_sem_2','ipk_sem_3','ipk_sem_4','ipk_sem_5','cluster'];
}

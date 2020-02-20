<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balas extends Model
{
    protected $table = 'balas';
    protected $fillable = ['chat_id','role','balas'];

    public function pesan() 
    {
        return $this->belongsTo('App\Chat');
    }
}

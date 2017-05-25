<?php

namespace App;

class Lecturer extends Model
{
    public function user()
    {
    	$this->belongsTo('App\User');
    }

    public function scopeInfo()
    {
    	return $this->where('user_id','=',\Auth::user()->id);
    }
}

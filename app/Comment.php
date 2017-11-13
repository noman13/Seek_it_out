<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function user() {
        return $this->belongsTo('App\User');
    }
    public function restaurent() {
        return $this->belongsTo('App\Post'); 
        //this is for a comment model
    }
}

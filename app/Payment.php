<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['verification', 'title', 'transaction_type', 'mobile_no', 'transaction_id', 'user_id'];
    public function user(){
      return $this-> belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    
	protected $fillable = ['verification','title','price','image','user_id'];
	public function user()
	{
	return $this-> belongsTo('App\User');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	protected $fillable = ['verification','title', 'description', 'total_seat', 'avail_seat', 'image', 'user_id'];
        public function user()
	{
	return $this-> belongsTo('App\User');
	}
}

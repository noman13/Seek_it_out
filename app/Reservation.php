<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
        protected $fillable = ['title', 'type', 'rev_date', 'rev_time', 'total_seat', 'user_id'];
        public function user()
	{
	return $this-> belongsTo('App\User');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
	  /** public function category() {
        return $this->belongsTo('App\Category');
    }**/


   protected $fillable = [
           
            'title',
            'body',
            'image',
	    'user_id'
        ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function delete()
    {
        // delete all related comments 
        $this->comments()->delete();
        
	return parent::delete();
	}
        

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}


	/************ Стас *****************/
	public function ratings(){
        return $this->hasMany('App\Rating', 'restaurantId');
    }

    public function image(){
		return Image::where('restaurantId', $this->id)->get()[0];
    }
    /*********************************/
}

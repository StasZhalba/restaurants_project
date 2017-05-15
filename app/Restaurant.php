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
		return $this->belongsTo(Admin::class);
	}


	public function ratings(){
        return $this->hasMany('App\Rating', 'restaurantId');
    }

    public function image(){
		return Image::where('restaurantId', $this->id)->get()[0];
    }

    public function cuisine(){
    	return $this->belongsTo(Cuisine::class);
    }

    public function dishes(){
    	return $this->belongsTo(Dish::class);
    }
}

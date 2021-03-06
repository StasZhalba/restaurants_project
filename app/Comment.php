<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body'];

    public function restaurant()
    {
    	return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

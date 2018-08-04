<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(category::class);
    }
}

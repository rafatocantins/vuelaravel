<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // defining relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

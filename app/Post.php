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

    // mass assignment on specific fields
    protected $fillable = ['user_id', 'title', 'body', 'image'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Create a many-to-many relationship between user and role
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

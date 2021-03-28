<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasOne(User::class, 'user_id');
    }

    public function posts() {
        return $this->hasManyThrough(Post::class, User::class, 'country_id', 'user_id');
    }
}

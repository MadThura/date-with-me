<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /** @use HasFactory<\Database\Factories\LikeFactory> */
    use HasFactory;

    // The user who liked someone
    public function liker()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // The user who was liked
    public function likedUser()
    {
        return $this->belongsTo(User::class, 'liked_user_id');
    }
}

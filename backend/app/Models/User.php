<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'birthdate',
        'location',
        'bio',
        'profile_img',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function setting()
    {
        return $this->hasOne(Setting::class);
    }

    // Users who this user has liked
    public function likesGiven()
    {
        return $this->hasMany(Like::class, 'user_id');
    }

    // Users who have liked this user
    public function likesReceived()
    {
        return $this->hasMany(Like::class, 'liked_user_id');
    }

    public function blockedUsers()
    {
        return $this->hasMany(BlockedUser::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}

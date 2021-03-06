<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }

    public function followers()
    {
        return $this->belongsToMany('App\User', 'relationships', 'followed_id', 'follower_id');
    }

    public function followedUsers()
    {
        return $this->belongsToMany('App\User', 'relationships', 'follower_id', 'followed_id');
    }

    public function isFollowing($user)
    {
        return $this->followedUsers()->where('followed_id', $user)->exists();
    }

    public function activities()
    {
        return $this->hasMany('App\Activity');
    }

    public function learnedWords()
    {
        $lessons = $this->lessons;

        $wordsCount = 0;

        foreach ($lessons as $lesson) {
            foreach ($lesson->answers as $answer) {
                if ($answer->isCorrect()) $wordsCount++;
            }
        }
        
        return $wordsCount;
    }
}

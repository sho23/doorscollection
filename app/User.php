<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\EmailVerificationJa;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'email_verified_at', 'twitter_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function accounts(){
        return $this->hasMany('App\LinkedSocialAccount');
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new EmailVerificationJa);
    }

    public function likes(){
      return $this->hasMany('App\Like');
    }
 
    public function entrance(){
      return $this->hasMany('App\Entrance');
    }

}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class LocationUser extends Authenticatable
{
  

    protected $table = 'locationusers';

    protected $fillable = [
        'name', 'email', 'password','username','users_role',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
}

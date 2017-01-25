<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password','fullname',
    ];

    protected $hidden = [
        'user_password', 'remember_token',
    ];

    public function userEntry(){
        return $this->hasMany('App\Entry', 'userid');
    }

    public function userTopic(){
        return $this->hasMany('App\Topic' , 'userid');
    }

    /* user message modelini BETA kodlu kağıttan yap.
     * */
}

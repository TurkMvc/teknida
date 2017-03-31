<?php

namespace App;

use App\Providers\AuthServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Entry extends Model
{
    protected $table = 'entries';
    protected $fillable = [
        'content','userid'
    ];

    protected $visible = [
        'like' , 'unlike'
    ];

    public function entryUser(){
        return $this->belongsTo('App\User' , 'userid');
    }

    public function entryTopic(){
        return $this->belongsTo('App\Topic' , 'topicid');
    }


}

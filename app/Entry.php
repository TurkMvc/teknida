<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'content'
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

    /*ENTEY REPLY bağlantısını BETA kodlu kağııtan yap. usermessage ile aynı zaman.
     * */
}

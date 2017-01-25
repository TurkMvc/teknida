<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    protected $fillable = [
        'topic_name', 'cat_id'
    ];

    public function topicEntry(){
        return $this->hasMany('App\Entry' , 'topicid');
    }

    public function topicCat(){
        return $this->belongsTo('App\Category' , 'catid');
    }

    public function topicUser(){
        return $this->belongsTo('App\User' , 'userid');
    }
}

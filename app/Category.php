<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'cat_name', 'cat_desc'
    ];

    public function catTopic(){
        return $this->hasMany('App\Topic' , 'catid');
    }
}

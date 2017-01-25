<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\User;
use App\Entry;
use App\Topic;
use App\Category;

            Route::get('/user', function (){
                $user = User::all();

                return $user;
            });

            Route::get('/entry', function(){
               /*
                $entryler = User::find(1)->userEntry;

                foreach ($entryler as $entry){
                    echo $entry->content . '<br>';
                }
               */

               $entryler = Entry::all();

                foreach ($entryler as $entry) {
                    echo $entry->content .  '-' . $entry->entryUser->username . '<br>' ;
                }
            });

Route::get('/other', 'TopicController@index');



Route::get('/', function () {
    return view('layouts.topic');
});

Auth::routes();

Route::get('/home', 'HomeController@index');




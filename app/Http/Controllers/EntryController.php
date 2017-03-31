<?php

namespace App\Http\Controllers;

use App\Entry;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    public function entryOlustur(Request $request){
        $request->userid=Auth::user()->id;
        Entry::create($request->all());
    }
}

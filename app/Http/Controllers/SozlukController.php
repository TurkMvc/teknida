<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SozlukController extends Controller
{
    public function post_entryEkle(Request $request)
    {
        $request->merge(['userid'=>Auth::user()->id]);
        Entry::create($request->all());
        return response([
            'baslik'=>'Basarili',
            'icerik'=>'Başarılı bir şekilde kaydedildi.'
        ]);
    }
}

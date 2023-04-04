<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\player;

class fetchers extends Controller
{
    //
    function show(){
        $dataUser=player::all();
        return view('profile',['data'=>$dataUser]);
    }
}

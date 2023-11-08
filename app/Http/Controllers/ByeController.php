<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ByeController extends Controller
{
    public function home(){
        return view('tambah_biodata');
    }

    public function show(Request $send){
        return view('tampil_biodata', compact('send'));
    }
}


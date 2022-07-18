<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comic;

class HomeController extends Controller
{
    public function index(){
        $Comics = Comic::all();
        // dd($Comics);
        return view('home', compact('Comics'));
    }
}

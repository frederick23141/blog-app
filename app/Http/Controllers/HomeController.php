<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //return view home from resource views/home.blade.php
    public function __invoke(){
        return view('home');
    }
}

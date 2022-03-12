<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function terms(){
        return view('pages.terms');
    }


    public function policy(){
        return view('pages.policy');
    }
}

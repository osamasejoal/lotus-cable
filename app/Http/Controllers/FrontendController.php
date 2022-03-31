<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontpage(){
        return view('frontend.front-page');
    }
}

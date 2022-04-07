<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{





    /*
    |--------------------------------------------------------------------------
    |                            FRONTPAGE METHOD
    |--------------------------------------------------------------------------
    */
    public function frontpage(){
        return view('frontend.index');
    }
}

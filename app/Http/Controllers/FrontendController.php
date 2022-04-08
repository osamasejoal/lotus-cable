<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class FrontendController extends Controller
{





    /*
    |--------------------------------------------------------------------------
    |                            FRONTPAGE METHOD
    |--------------------------------------------------------------------------
    */
    public function frontpage(){
        $company_info = Company::first();
        return view('frontend.index', compact('company_info'));
    }
}

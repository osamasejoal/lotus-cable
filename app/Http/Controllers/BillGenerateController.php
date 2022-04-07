<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class BillGenerateController extends Controller
{





    /*
    |--------------------------------------------------------------------------
    |                       GENERATE MONTHLY BILL METHOD
    |--------------------------------------------------------------------------
    */
    public function gMonthlyBill()
    {
        $areas      = Area::all();
        $year       = '';
        $month      = '';
        $area_id    = '';
        $customers  = '';

        return view('backend.bill-generate.generate-monthly-bill', compact('areas', 'year', 'month', 'area_id', 'customers'));
    }





    /*
    |--------------------------------------------------------------------------
    |                 SEARCH FOR GENERATE MONTHLY BILL METHOD
    |--------------------------------------------------------------------------
    */
    public function searchForBill(Request $request)
    {
        $request->validate([
            'year'           => 'required',
            'month'          => 'required',
            'area'           => 'required',
        ], [
            'year.required'  => 'This field is Required',
            'month.required' => 'This field is Required',
            'area.required'  => 'This field is Required',
        ]);

        if (!empty($request->year && $request->month && $request->area)) {

            $year       = $request->year;
            $month      = $request->month;
            $area_id    = $request->area;

            $areas      = Area::all();
            $customers  = Customer::where('area_id', $area_id)->get();

            return view('backend.bill-generate.generate-monthly-bill', compact('year', 'month', 'area_id', 'areas', 'customers'));
        }
        else{
            return back();
        }
    }




}

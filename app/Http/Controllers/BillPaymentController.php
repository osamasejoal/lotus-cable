<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Customer;
use App\Models\Bill;

class BillPaymentController extends Controller
{
    




    /*
    |--------------------------------------------------------------------------
    |                       MONTHLY PAYMENT METHOD
    |--------------------------------------------------------------------------
    */
    public function monthlyPayment(){
        $areas      = Area::all();
        $year       = '';
        $month      = '';
        $area_id    = '';
        $bills      = '';
        
        return view('backend.bill-payment.monthly-payment', compact('areas', 'year', 'month', 'area_id', 'bills'));
    }





    /*
    |--------------------------------------------------------------------------
    |                     SEARCH FOR MONTHLY PAYMENT METHOD
    |--------------------------------------------------------------------------
    */
    public function searchMonthlyP(Request $request){

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

            $bills      = Bill::where('year', $year)
                                ->where('month', $month)
                                ->where('area_id', $area_id)
                                ->get(); 

            return view('backend.bill-payment.monthly-payment', compact('year', 'month', 'area_id', 'areas', 'bills'));
        } else {
            return back();
        }

    }


}

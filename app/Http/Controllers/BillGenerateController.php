<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\Package;
use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Cast\Array_;

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

        } else {
            return back();
        }
    }




    /*
    |--------------------------------------------------------------------------
    |                       INSERT MONTHLY BILL METHOD
    |--------------------------------------------------------------------------
    */
    public function insertMonthlyBill(Request $request)
    {

        if (!empty($request->year && $request->month && $request->check)) {

            foreach ($request->check as $customers_id) {

                $customer   = Customer::find($customers_id);
                $staff      = Staff::where('area_id', $customer->area_id)->first();
                $package    = Package::find($customer->package_id);

                Bill::insert([
                    'customer_id'           => $customers_id,
                    'staff_id'              => $staff->id,
                    'area_id'               => $customer->area_id,
                    'package_id'            => $package->id,
                    'transaction_type_id'   => 1,
                    'year'                  => $request->year,
                    'month'                 => $request->month,
                    'month_wise_amount'     => $package->amount,
                    'discount'              => 0,
                    'paid_amount'           => 0,
                    'bill_generate_date'    => Carbon::now()->toDateString(),
                ]);

                Customer::find($customers_id)->update([
                    'due'                   => $package->amount,
                ]);

            }

        } else {
            return back();
        }
        

        
    }
}

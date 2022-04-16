<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Area;

class BillTransactionController extends Controller
{





    /*
    |--------------------------------------------------------------------------
    |                       PAID TRANSACTION METHOD
    |--------------------------------------------------------------------------
    */
    public function paidTransaction()
    {
        $search_bills   = Bill::where('paid_amount', '>', 0)
                                ->where('status', 1)
                                ->get();

        $bills          = Bill::where('paid_amount', '>', 0)
                                ->where('status', 1)
                                ->get();

        return view('backend.bill-transaction.paid-transaction', compact('bills', 'search_bills'));
    }





    /*
    |--------------------------------------------------------------------------
    |                 SEARCH FOR PAID TRANSACTION METHOD
    |--------------------------------------------------------------------------
    */
    public function searchForPaidT(Request $request)
    {

        if (!empty($request->c_id || $request->c_name || $request->date)) {

            $c_id           = $request->c_id;
            $c_name         = $request->c_name;
            $date           = $request->date;

            // Search with Customer ID
            if (empty($c_name && $date)) {
                $bills      = Bill::whereHas('customer', function ($query) use ($c_id) {
                                        return $query->where('customer_id', 'like', $c_id);
                                    })
                                    ->where('paid_amount', '>', 0)
                                    ->where('status', 1)
                                    ->get();
            }
            // Search with Customer Name
            elseif (empty($c_id && $date)) {
                $bills      = Bill::whereHas('customer', function ($query) use ($c_name) {
                                        return $query->where('name', 'like', $c_name);
                                    })
                                    ->where('paid_amount', '>', 0)
                                    ->where('status', 1)
                                    ->get();
            }
            // Search with Date
            elseif (empty($c_id && $c_name)) {
                $bills      = Bill::where('paid_amount', '>', 0)
                                    ->where('status', 1)
                                    ->where('bill_generate_date', $date)
                                    ->get();
            }
            // Search with Customer Name & ID
            elseif (empty($date)) {
                $bills      = Bill::where('paid_amount', '>', 0)
                                    ->where('status', 1)
                                    ->whereHas('customer', function ($query) use ($c_name, $c_id) {
                                        return $query->where('name', 'like', $c_name)
                                        ->where('customer_id', 'like', $c_id);
                                    })
                                    ->get();
            }
            // Search with Customer ID & Date
            elseif (empty($c_name)) {
                $bills      = Bill::where('paid_amount', '>', 0)
                                    ->where('status', 1)
                                    ->where('bill_generate_date', $date)
                                    ->whereHas('customer', function ($query) use ($c_id) {
                                        return $query->where('customer_id', 'like', $c_id);
                                    })
                                    ->get();
            }
            // Search with Customer Name & Date
            elseif (empty($c_id)) {
                $bills      = Bill::where('paid_amount', '>', 0)
                                    ->where('status', 1)
                                    ->where('bill_generate_date', $date)
                                    ->whereHas('customer', function ($query) use ($c_name) {
                                        return $query->where('name', 'like', $c_name);
                                    })
                                    ->get();
            }
            // Search with Customer Name, ID & Date
            else {
                $bills      = Bill::where('paid_amount', '>', 0)
                                    ->where('status', 1)
                                    ->where('bill_generate_date', $date)
                                    ->whereHas('customer', function ($query) use ($c_name, $c_id) {
                                        return $query->where('name', 'like', $c_name)
                                        ->where('customer_id', $c_id);
                                    })
                                    ->get();
            }


        $search_bills       = Bill::where('paid_amount', '>', 0)
                                    ->where('status', 1)
                                    ->get();

            return view('backend.bill-transaction.paid-transaction', compact('bills', 'search_bills'));
        } 
        else {
            return back()->with('error', 'You have to fill at least one section');
        }
    }





    /*
    |--------------------------------------------------------------------------
    |                       DUE TRANSACTION METHOD
    |--------------------------------------------------------------------------
    */
    public function dueTransaction()
    {
        $search_bills   = Bill::where('paid_amount', 0)
                                ->where('status', 1)
                                ->get();

        $bills          = Bill::where('paid_amount', 0)
                                ->where('status', 1)
                                ->get();

        return view('backend.bill-transaction.due-transaction', compact('bills', 'search_bills'));
    }





    /*
    |--------------------------------------------------------------------------
    |                 SEARCH FOR DUE TRANSACTION METHOD
    |--------------------------------------------------------------------------
    */
    public function searchForDueT(Request $request)
    {

        if (!empty($request->c_id || $request->c_name || $request->date)) {

            $c_id           = $request->c_id;
            $c_name         = $request->c_name;
            $date           = $request->date;

            // Search with Customer ID
            if (empty($c_name && $date)) {
                $bills      = Bill::whereHas('customer', function ($query) use ($c_id) {
                                        return $query->where('customer_id', 'like', $c_id);
                                    })
                                    ->where('paid_amount', 0)
                                    ->where('status', 1)
                                    ->get();
            }
            // Search with Customer Name
            elseif (empty($c_id && $date)) {
                $bills      = Bill::whereHas('customer', function ($query) use ($c_name) {
                                        return $query->where('name', 'like', $c_name);
                                    })
                                    ->where('paid_amount', 0)
                                    ->where('status', 1)
                                    ->get();
            }
            // Search with Date
            elseif (empty($c_id && $c_name)) {
                $bills      = Bill::where('paid_amount', 0)
                                    ->where('status', 1)
                                    ->where('bill_generate_date', $date)
                                    ->get();
            }
            // Search with Customer Name & ID
            elseif (empty($date)) {
                $bills      = Bill::where('paid_amount', 0)
                                    ->where('status', 1)
                                    ->whereHas('customer', function ($query) use ($c_name, $c_id) {
                                        return $query->where('name', 'like', $c_name)
                                        ->where('customer_id', 'like', $c_id);
                                    })
                                    ->get();
            }
            // Search with Customer ID & Date
            elseif (empty($c_name)) {
                $bills      = Bill::where('paid_amount', 0)
                                    ->where('status', 1)
                                    ->where('bill_generate_date', $date)
                                    ->whereHas('customer', function ($query) use ($c_id) {
                                        return $query->where('customer_id', 'like', $c_id);
                                    })
                                    ->get();
            }
            // Search with Customer Name & Date
            elseif (empty($c_id)) {
                $bills      = Bill::where('paid_amount', 0)
                                    ->where('status', 1)
                                    ->where('bill_generate_date', $date)
                                    ->whereHas('customer', function ($query) use ($c_name) {
                                        return $query->where('name', 'like', $c_name);
                                    })
                                    ->get();
            }
            // Search with Customer Name, ID & Date
            else {
                $bills      = Bill::where('paid_amount', 0)
                                    ->where('status', 1)
                                    ->where('bill_generate_date', $date)
                                    ->whereHas('customer', function ($query) use ($c_name, $c_id) {
                                        return $query->where('name', 'like', $c_name)
                                        ->where('customer_id', $c_id);
                                    })
                                    ->get();
            }


        $search_bills       = Bill::where('paid_amount', 0)
                                    ->where('status', 1)
                                    ->get();

            return view('backend.bill-transaction.due-transaction', compact('bills', 'search_bills'));
        } 
        else {
            return back()->with('error', 'You have to fill at least one section');
        }
    }





    /*
    |--------------------------------------------------------------------------
    |                   DELETE DUE DUE TRANSACTION METHOD
    |--------------------------------------------------------------------------
    */
    public function deleteDueT($id){
        Bill::find($id)->update([
            'status' => 0,
        ]);

        return back();
    }


}

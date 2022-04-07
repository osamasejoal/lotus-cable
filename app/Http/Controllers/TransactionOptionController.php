<?php

namespace App\Http\Controllers;

use App\Models\TransactionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TransactionOptionController extends Controller
{
     




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $trans_options = TransactionOption::all();
        return view('backend.transactions.transaction-option.view', compact('trans_options'));
    }





    /*
    |--------------------------------------------------------------------------
    |                          UPDATESTATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function updateStatus($id)
    {
        $status = TransactionOption::find($id)->status;

        if ($status == 1) {
            TransactionOption::find($id)->update([
                'status' => 0,
            ]);
        } elseif ($status == 0) {
            TransactionOption::find($id)->update([
                'status' => 1,
            ]);
        }

        return back();
    }





    /*
    |--------------------------------------------------------------------------
    |                              CREATE METHOD
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('backend.transactions.transaction-option.add');
    }





    /*
    |--------------------------------------------------------------------------
    |                              STORE METHOD
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required',
        ], [
            'name.required'     => 'This field is required',
        ]);

        TransactionOption::insert([
            'name'              => $request->name,
            'created_at'        => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully create Transaction Option');
    }






    public function show(TransactionOption $transactionOption)
    {
        //
    }





    /*
    |--------------------------------------------------------------------------
    |                              EDIT METHOD
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $trans_option = TransactionOption::find($id);
        return view('backend.transactions.transaction-option.edit', compact('trans_option'));
    }





    /*
    |--------------------------------------------------------------------------
    |                              UPDATE METHOD
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'              => 'required',
        ], [
            'name.required'     => 'This field is required',
        ]);

        TransactionOption::find($id)->update([
            'name'              => $request->name,
            'updated_at'        => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated Transaction Option');
    }





    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        TransactionOption::find($id)->delete();
        return back()->with('success', 'Succesfully deleted Transaction Option');
    }
}

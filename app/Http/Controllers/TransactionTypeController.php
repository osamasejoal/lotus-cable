<?php

namespace App\Http\Controllers;

use App\Models\TransactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TransactionTypeController extends Controller
{
       




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $trans_types = TransactionType::all();
        return view('backend.transactions.transaction-type.view', compact('trans_types'));
    }





    /*
    |--------------------------------------------------------------------------
    |                          UPDATESTATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function updateStatus($id)
    {
        $status = TransactionType::find($id)->status;

        if ($status == 1) {
            TransactionType::find($id)->update([
                'status' => 0,
            ]);
        } elseif ($status == 0) {
            TransactionType::find($id)->update([
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
        return view('backend.transactions.transaction-type.add');
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
            'amount'            => 'required | integer',
        ], [
            'name.required'     => 'This field is required',
            'amount.required'   => 'This field is required',
            'amount.integer'    => 'Only Integer is allowed',
        ]);

        TransactionType::insert([
            'name'              => $request->name,
            'amount'            => $request->amount,
            'created_at'        => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully created Transaction Type');
    }






    public function show(TransactionType $transactionType)
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
        $trans_type = TransactionType::find($id);
        return view('backend.transactions.transaction-type.edit', compact('trans_type'));
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
            'amount'            => 'required | integer',
        ], [
            'name.required'     => 'This field is required',
            'amount.required'   => 'This field is required',
            'amount.integer'    => 'Only Integer is allowed',
        ]);

        TransactionType::find($id)->update([
            'name'              => $request->name,
            'amount'            => $request->amount,
            'updated_at'        => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated Transaction Type');
    }
    




    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        TransactionType::find($id)->delete();
        return back()->with('success', 'Succesfully deleted Transaction Type');
    }
}

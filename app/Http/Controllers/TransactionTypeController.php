<?php

namespace App\Http\Controllers;

use App\Models\TransactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TransactionTypeController extends Controller
{
       




    //=======================================
    // INDEX method for view Transaction Type
    //=======================================
    public function index()
    {
        $trans_types = TransactionType::all();
        return view('backend.transactions.transaction-type.view', compact('trans_types'));
    }





    //=======================================================
    // updateStatus method for update Transaction Type status
    //=======================================================
    public function updateStatus(Request $request)
    {
        $trans_type = TransactionType::find($request->t_type_id);
        $trans_type->status = $request->status;
        $trans_type->save();
        return response()->json(['success', 'Status change successfully']);
    }
    




    //==========================================
    // CREATE method for create Transaction Type
    //==========================================
    public function create()
    {
        return view('backend.transactions.transaction-type.add');
    }
    




    //=========================================
    // STORE method for create Transaction Type
    //=========================================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required | integer',
        ], [
            'name.required' => 'This field is required',
            'amount.required' => 'This field is required',
            'amount.integer' => 'Only Integer is allowed',
        ]);

        TransactionType::insert([
            'name' => $request->name,
            'amount' => $request->amount,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully created Transaction Type');
    }






    public function show(TransactionType $transactionType)
    {
        //
    }
    




    //=======================================
    // EDIT method for edit Transaction Type
    //=======================================
    public function edit($id)
    {
        $trans_type = TransactionType::find($id);
        return view('backend.transactions.transaction-type.edit', compact('trans_type'));
    }
    




    //========================================
    // UPDATE method for edit Transaction Type
    //========================================
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required | integer',
            'status' => 'required',
        ], [
            'name.required' => 'This field is required',
            'amount.required' => 'This field is required',
            'amount.integer' => 'Only Integer is allowed',
            'status.required' => 'This field is required',
        ]);

        TransactionType::find($id)->update([
            'name' => $request->name,
            'amount' => $request->amount,
            'status' => $request->status,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated Transaction Type');
    }
    




    //===========================================
    // DESTROY method for dekete Transaction Type
    //===========================================
    public function destroy($id)
    {
        TransactionType::find($id)->delete();
        return back()->with('success', 'Succesfully deleted Transaction Type');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TransactionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TransactionOptionController extends Controller
{
     




    //=========================================
    // INDEX method for view transaction option
    //=========================================
    public function index()
    {
        $trans_options = TransactionOption::all();
        return view('backend.transactions.transaction-option.view', compact('trans_options'));
    }





    //=========================================================
    // updateStatus method for update Transaction Option status
    //=========================================================
    public function updateStatus(Request $request)
    {
        $trans_opt = TransactionOption::find($request->t_option_id);
        $trans_opt->status = $request->status;
        $trans_opt->save();
        return response()->json(['success', 'Status change successfully']);
    }





    //============================================
    // CREATE method for create transaction option
    //============================================
    public function create()
    {
        return view('backend.transactions.transaction-option.add');
    }





    //============================================
    // STORE method for create transaction option
    //============================================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'This field is required',
        ]);

        TransactionOption::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully create Transaction Option');
    }






    public function show(TransactionOption $transactionOption)
    {
        //
    }





    //============================================
    // EDIT method for edit transaction option
    //============================================
    public function edit($id)
    {
        $trans_option = TransactionOption::find($id);
        return view('backend.transactions.transaction-option.edit', compact('trans_option'));
    }





    //============================================
    // UPDATE method for edit transaction option
    //============================================
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'This field is required',
            'status.required' => 'This field is required',
        ]);

        TransactionOption::find($id)->update([
            'name' => $request->name,
            'status' => $request->status,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated Transaction Option');
    }





    //=============================================
    // DESTROY method for delete transaction option
    //=============================================
    public function destroy($id)
    {
        TransactionOption::find($id)->delete();
        return back()->with('success', 'Succesfully deleted Transaction Option');
    }
}

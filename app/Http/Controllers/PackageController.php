<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PackageController extends Controller
{
   




    //===================================
    // INDEX method for view Package List
    //===================================
    public function index()
    {
        $packages = Package::all();
        return view('backend.package.view', compact('packages'));
    }





    //==============================================
    // updateStatus method for update Package status
    //==============================================
    public function updateStatus($id)
    {
        $status = Package::find($id)->status;

        if ($status == 1) {
            Package::find($id)->update([
                'status' => 0,
            ]);
        } elseif ($status == 0) {
            Package::find($id)->update([
                'status' => 1,
            ]);
        }

        return back();
    }





    //===================================
    // CREATE method for create Package
    //===================================
    public function create()
    {
        return view('backend.package.add');
    }





    //===================================
    // STORE method for create Package
    //===================================
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required',
            'amount'            => 'required | integer',
        ], [
            'name.required'     => 'This field is required',
            'amount.required'   => 'This field is required',
            'amount.integer'    => 'Please enter a integer number',
        ]);

        Package::insert([
            'name'              => $request->name,
            'amount'            => $request->amount,
            'created_at'        => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully created your package');
    }







    public function show(Package $package)
    {
        //
    }





    //===================================
    // EDIT method for edit Package
    //===================================
    public function edit($id)
    {
        $package = Package::find($id);
        return view('backend.package.edit', compact('package'));
    }





    //===================================
    // UPDATE method for edit Package
    //===================================
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'              => 'required',
            'amount'            => 'required | integer',
            'status'            => 'required',
        ], [
            'name.required'     => 'This field is required',
            'amount.required'   => 'This field is required',
            'amount.integer'    => 'Please enter a integer number',
            'status.required'   => 'This field is required',
        ]);

        Package::find($id)->update([
            'name'              => $request->name,
            'amount'            => $request->amount,
            'status'            => $request->status,
            'updated_at'        => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated your package');
    }





    //===================================
    // DESTROY method for delete Package
    //===================================
    public function destroy($id)
    {
        Package::find($id)->delete();
        return back()->with('success', 'Successfully delete your package');
    }
}

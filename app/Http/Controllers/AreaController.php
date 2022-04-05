<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AreaController extends Controller
{
    




    //======================================
    // INDEX method for view Staff List
    //======================================
    public function index()
    {
        $areas = Area::all();
        return view('backend.area.view', compact('areas'));
    }





    //===========================================
    // updateStatus method for update Area status
    //===========================================
    public function updateStatus($id)
    {
        $status = Area::find($id)->status;

        if ($status == 1) {
            Area::find($id)->update([
                'status' => 0,
            ]);
        } elseif ($status == 0) {
            Area::find($id)->update([
                'status' => 1,
            ]);
        }

        return back();
    }





    //==============================
    // CREATE method for create area
    //==============================
    public function create()
    {
        return view('backend.area.add');
    }





    //==============================
    // STORE method for create area
    //==============================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' => 'This field is required',
        ]);

        Area::insert([
            'name'          => $request->name,
            'created_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully create Area');
    }

    




    public function show(Area $area)
    {
        //
    }





    //===============================
    // EDIT method for edit area List
    //===============================
    public function edit($id)
    {
        $area = Area::find($id);
        return view('backend.area.edit', compact('area'));
    }





    //=================================
    // UPDATE method for edit area List
    //=================================
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'      => 'required',
            'status'    => 'required',
        ], [
            'name.required'     => 'This field is required',
            'status.required'   => 'This field is required',
        ]);

        Area::find($id)->update([
            'name'          => $request->name,
            'status'        => $request->status,
            'updated_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated Area data');
    }





    //======================================
    // DESTROY method for dekete Area List
    //======================================
    public function destroy($id)
    {
        Area::find($id)->delete();
        return back()->with('success', 'Succesfully deleted your area');
    }
}

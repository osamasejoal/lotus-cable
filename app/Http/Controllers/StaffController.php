<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class StaffController extends Controller
{





    //======================================
    // INDEX method for view Staff List
    //======================================
    public function index()
    {
        $staffs = User::where('type', '2')->get();
        return view('backend.staff.view', compact('staffs'));
    }





    //======================================
    // CREATE method for create Staff account
    //======================================
    public function create()
    {
        return view('backend.staff.add');
    }





    //======================================
    // STORE method for create Staff account
    //======================================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'image' => 'image | mimes:png,jpg,jpeg',
        ], [
            'name.required' => 'This field is Required',
            'email.required' => 'This field is Required',
            'email.email' => 'Enter a valid email',
            'password.required' => 'This field is Required',
            'phone.required' => 'This field is Required',
            'gender.required' => 'This field is Required',
            'address.required' => 'This field is Required',
            'image.image' => 'Please choose a image file',
            'image.mimes' => 'Please choose a png, jpg or jpeg File',
        ]);

        if ($request->hasFile('image')) {
            $img = Image::make($request->image);
            $img_name = auth()->id() . auth()->user()->name . Str::random('5') . '.' . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/profile-pic/' . $img_name));

            User::insert([
                'image' => $img_name,
            ]);
        }

        $staff_id = 1;

        User::insert([
            'staff_id' => $staff_id ++,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'created_by' => auth()->id(),
        ]);
        return back()->with('success', 'Successfully create Staff Account');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

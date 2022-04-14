<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ProfileController extends Controller
{





    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        return view('backend.profile.view');
    }





    /*
    |--------------------------------------------------------------------------
    |                              CREATE METHOD
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        $areas      = Area::all();
        $packages   = Package::all();
        return view('backend.profile.create-account', compact('areas', 'packages'));
    }





    /*
    |--------------------------------------------------------------------------
    |                              STORE METHOD
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        //
    }

    




    public function show($id)
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
        //
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
            'email'             => 'required | email',
            'phone'             => 'required',
            'gender'            => 'required',
            'address'           => 'required',
            'image'             => 'image | mimes:png,jpg,jpeg',
        ], [
            'name.required'     => 'This field is Required',
            'email.required'    => 'This field is Required',
            'email.email'       => 'Enter a valid email',
            'phone.required'    => 'This field is Required',
            'gender.required'   => 'This field is Required',
            'address.required'  => 'This field is Required',
            'image.image'       => 'Please choose a image file',
            'image.mimes'       => 'Please choose a png, jpg or jpeg File',
        ]);


        if ($request->hasFile('image')) {

            if (auth()->user()->image != 'default.png') {
                unlink(base_path('public/backend/assets/images/profile-pic/' . auth()->user()->image));
            }

            $img        = Image::make($request->image);
            $img_name   = auth()->user()->type . auth()->user()->name . Str::random('5') . '.' . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/profile-pic/' . $img_name));

            User::find($id)->update([
                'image'         => $img_name,
            ]);

            if (auth()->user()->type == 2) {
                # code...
            } else {
                # code...
            }
            
        }


        User::find($id)->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'gender'            => $request->gender,
            'address'           => $request->address,
            'updated_by'        => auth()->id(),
        ]);


        return back()->with('success', 'Successfully updated Admin Profile');
    }




    
    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    
            


    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $admins = User::where('type', '1')->get();
        return view('backend.admin.view', compact('admins'));
    }




    /*
    |--------------------------------------------------------------------------
    |                          UPDATESTATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function updateStatus($id)
    {
        $status = User::find($id)->status;

        if ($status == 1) {
            User::find($id)->update([
                'status' => 0,
            ]);
        } elseif ($status == 0) {
            User::find($id)->update([
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
        //
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
            'email'             => 'required | email',
            'phone'             => 'required',
            'gender'            => 'required',
            'address'           => 'required',
        ], [
            'name.required'     => 'This field is Required',
            'email.required'    => 'This field is Required',
            'email.email'       => 'Enter a valid email',
            'phone.required'    => 'This field is Required',
            'gender.required'   => 'This field is Required',
            'address.required'  => 'This field is Required',
        ]);

        $admin_password = Str::random('8');
        $admin_n  = $request->name;
        $admin_e = $request->email;


        User::insert([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($admin_password),
            'phone'             => $request->phone,
            'gender'            => $request->gender,
            'address'           => $request->address,
            'type'              => 1,
            'created_by'        => auth()->id(),
            'created_at'        => Carbon::now(),
        ]);



        // Mail::to($request->email)->send(new StaffMail($staff_password, $staff_n, $request->email));

        return back()->with('success', 'Successfully created Admin Account');
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
        $admin = User::find($id);
        return view('backend.admin.edit', compact('admin'));
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
            'status'            => 'required',
        ], [
            'name.required'     => 'This field is Required',
            'email.required'    => 'This field is Required',
            'email.email'       => 'Enter a valid email',
            'phone.required'    => 'This field is Required',
            'gender.required'   => 'This field is Required',
            'address.required'  => 'This field is Required',
            'image.image'       => 'Please choose a image file',
            'image.mimes'       => 'Please choose a png, jpg or jpeg File',
            'status.required'   => 'This field is Required',
        ]);

        $userd = User::find($id);

        if ($request->hasFile('image')) {
            if ($userd->image != 'default.png') {
                unlink(base_path('public/backend/assets/images/profile-pic/' . $userd->image));
            }
            $img = Image::make($request->image);
            $img_name = $userd->type . $userd->name . Str::random('5') . '.' . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/profile-pic/' . $img_name));

            User::find($id)->update([
                'image' => $img_name,
            ]);
        }


        User::find($id)->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'gender'            => $request->gender,
            'address'           => $request->address,
            'status'            => $request->status,
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
        User::find($id)->delete();

        return back()->with('success', 'Successfully deleted Admin profile');
    }
    
    
}

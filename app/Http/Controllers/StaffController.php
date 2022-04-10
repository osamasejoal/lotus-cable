<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\StaffMail;
use App\Models\Staff;
use App\Models\Area;
use Illuminate\Support\Carbon;

class StaffController extends Controller
{





    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $staffs     = User::where('type', '2')->get();
        return view('backend.staff.view', compact('staffs'));
    }





    /*
    |--------------------------------------------------------------------------
    |                          UPDATESTATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function updateStatus($id)
    {
        $staffs_id  = User::find($id)->staff_id;
        $status     = User::find($id)->status;

        if ($status == 1) {

            User::find($id)->update([
                'status'    => 0,
            ]);
            Staff::find($staffs_id)->update([
                'status'    => 0,
            ]);

        } elseif ($status == 0) {

            User::find($id)->update([
                'status'    => 1,
            ]);
            Staff::find($staffs_id)->update([
                'status'    => 1,
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
        $areas = Area::all();
        return view('backend.staff.add', compact('areas'));
    }





    /*
    |--------------------------------------------------------------------------
    |                              STORE METHOD
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {

        $request->validate([
            'area_id'           => 'required',
            'name'              => 'required',
            'email'             => 'required | email',
            'phone'             => 'required',
            'gender'            => 'required',
            'address'           => 'required',
            'image'             => 'image | mimes:png,jpg,jpeg',
        ], [
            'area_id.required'  => 'This field is Required',
            'name.required'     => 'This field is Required',
            'email.required'    => 'This field is Required',
            'email.email'       => 'Enter a valid email',
            'phone.required'    => 'This field is Required',
            'gender.required'   => 'This field is Required',
            'address.required'  => 'This field is Required',
            'image.image'       => 'Please choose a image file',
            'image.mimes'       => 'Please choose a png, jpg or jpeg File',
        ]);

        // $staff_password  = Str::random('8');
        $staff_password     = 12345678;
        $staff_n            = $request->name;
        $staff_e            = $request->email;


        $satff_data = Staff::create([
            'area_id'           => $request->area_id,
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($staff_password),
            'phone'             => $request->phone,
            'address'           => $request->address,
        ]);


        User::insert([
            'staff_id'          => $satff_data->id,
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($staff_password),
            'phone'             => $request->phone,
            'gender'            => $request->gender,
            'address'           => $request->address,
            'type'              => 2,
            'created_by'        => auth()->id(),
            'created_at'        => Carbon::now(),
        ]);

        

        // Mail::to($request->email)->send(new StaffMail($staff_password, $staff_n, $request->email));

        return back()->with('success', 'Successfully create Staff Account');
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
        $staff  = User::find($id);
        return view('backend.staff.edit', compact('staff'));
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

        $userd = User::find($id);
        $staffs_id = User::find($id)->staff_id;

        if ($request->hasFile('image')) {

            if ($userd->image != 'default.png') {
                unlink(base_path('public/backend/assets/images/profile-pic/' . $userd->image));
            }

            $img        = Image::make($request->image);
            $img_name   = $userd->type . $staffs_id->name . Str::random('5') . '.' . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/profile-pic/' . $img_name));

            User::find($id)->update([
                'image'         => $img_name,
            ]);

            Staff::find($staffs_id)->update([
                'image'         => $img_name,
            ]);
        }


        User::find($id)->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'gender'            => $request->gender,
            'address'           => $request->address,
            'updated_by'        => auth()->id(),
        ]);



        Staff::find($staffs_id)->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'address'           => $request->address,
        ]);


        return back()->with('success', 'Successfully updated Staff Profile');
    }





    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $staffs_id = User::find($id)->staff_id;

        User::find($id)->delete();

        Staff::find($staffs_id)->delete();

        return back()->with('success', 'Successfully deleted your staff');
    }
}

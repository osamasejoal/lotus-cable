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





    //======================================
    // INDEX method for view Staff List
    //======================================
    public function index()
    {
        $staffs = User::where('type', '2')->get();
        return view('backend.staff.view', compact('staffs'));
    }





    //============================================
    // updateStatus method for update Staff status
    //============================================
    public function updateStatus(Request $request, $id)
    {
        $staffs_id = User::find($request->staff_id)->staff_id;

        $staff_u = User::find($request->staff_id);
        $staff_u->status = $request->status;
        $staff_u->save();
        return response()->json(['success', 'Status change successfully']);

        $staff_t = Staff::find($staffs_id);
        $staff_t->status = $request->status;
        $staff_t->save();
        return response()->json(['success', 'Status change successfully']);
    }





    //======================================
    // CREATE method for create Staff account
    //======================================
    public function create()
    {
        $areas = Area::all();
        return view('backend.staff.add', compact('areas'));
    }





    //======================================
    // STORE method for create Staff account
    //======================================
    public function store(Request $request)
    {

        $request->validate([
            'area_id' => 'required',
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'image' => 'image | mimes:png,jpg,jpeg',
        ], [
            'area_id.required' => 'This field is Required',
            'name.required' => 'This field is Required',
            'email.required' => 'This field is Required',
            'email.email' => 'Enter a valid email',
            'phone.required' => 'This field is Required',
            'gender.required' => 'This field is Required',
            'address.required' => 'This field is Required',
            'image.image' => 'Please choose a image file',
            'image.mimes' => 'Please choose a png, jpg or jpeg File',
        ]);

        $staff_password = Str::random('8');
        $staff_n  = $request->name;
        $staff_e = $request->email;


        $satff_data = Staff::create([
            'area_id' => $request->area_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($staff_password),
            'phone' => $request->phone,
            'address' => $request->address,
        ]);


        User::insert([
            'staff_id' => $satff_data->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($staff_password),
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'type' => 2,
            'created_by' => auth()->id(),
            'created_at' => Carbon::now(),
        ]);

        

        Mail::to($request->email)->send(new StaffMail($staff_password, $staff_n, $request->email));

        return back()->with('success', 'Successfully create Staff Account');
    }






    public function show($id)
    {
        //
    }





    //=====================================
    // EDIT method for update Staff account
    //=====================================
    public function edit($id)
    {
        $staff = User::find($id);
        return view('backend.staff.edit', compact('staff'));
    }





    //========================================
    // UPDATE method for update Staff account
    //========================================
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'image' => 'image | mimes:png,jpg,jpeg',
            'status' => 'required',
        ], [
            'name.required' => 'This field is Required',
            'email.required' => 'This field is Required',
            'email.email' => 'Enter a valid email',
            'phone.required' => 'This field is Required',
            'gender.required' => 'This field is Required',
            'address.required' => 'This field is Required',
            'image.image' => 'Please choose a image file',
            'image.mimes' => 'Please choose a png, jpg or jpeg File',
            'status.required' => 'This field is Required',
        ]);

        $userd = User::find($id);
        $staffs_id = User::find($id)->staff_id;

        if ($request->hasFile('image')) {
            if ($userd->image != 'default.png') {
                unlink(base_path('public/backend/assets/images/profile-pic/' . $userd->image));
            }
            $img = Image::make($request->image);
            $img_name = $userd->type . $staffs_id->name . Str::random('5') . '.' . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/profile-pic/' . $img_name));

            User::find($id)->update([
                'image' => $img_name,
            ]);

            Staff::find($staffs_id)->update([
                'image' => $img_name,
            ]);
        }


        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'status' => $request->status,
            'updated_by' => auth()->id(),
        ]);



        Staff::find($staffs_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => $request->status,
        ]);


        return back()->with('success', 'Successfully updated Staff Profile');
    }





    //========================================
    // DESTROY method for delete Staff account
    //========================================
    public function destroy($id)
    {
        $staffs_id = User::find($id)->staff_id;

        User::find($id)->delete();

        Staff::find($staffs_id)->delete();

        return back()->with('success', 'Successfully deleted your staff');
    }
}

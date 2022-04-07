<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Package;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerMail;

class CustomerController extends Controller
{




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $customers = User::where('type', '3')->get();
        return view('backend.customer.view', compact('customers'));
    }





    /*
    |--------------------------------------------------------------------------
    |                          UPDATESTATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function updateStatus($id)
    {
        $customers_id = User::find($id)->customer_id;
        $status = User::find($id)->status;

        if ($status == 1) {

            User::find($id)->update([
                'status' => 0,
            ]);
            Customer::find($customers_id)->update([
                'status' => 0,
            ]);

        } elseif ($status == 0) {

            User::find($id)->update([
                'status' => 1,
            ]);
            Customer::find($customers_id)->update([
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
        $areas = Area::all();
        $packages = Package::all();
        return view('backend.customer.add', compact('areas', 'packages'));
    }




    /*
    |--------------------------------------------------------------------------
    |                              STORE METHOD
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'area_id'                   => 'required',
            'package_id'                => 'required',
            'name'                      => 'required',
            'email'                     => 'required | email',
            'phone'                     => 'required',
            'address'                   => 'required',
            'gender'                    => 'required',
            'nid'                       => 'required',
            'register_date'             => 'required',
        ], [
            'area_id.required'          => 'This field is Required',
            'package_id.required'       => 'This field is Required',
            'name.required'             => 'This field is Required',
            'email.required'            => 'This field is Required',
            'email.email'               => 'Enter a valid email',
            'phone.required'            => 'This field is Required',
            'address.required'          => 'This field is Required',
            'gender.required'           => 'This field is Required',
            'nid.required'              => 'This field is Required',
            'register_date.required'    => 'This field is Required',
        ]);

        $customer_password = Str::random('8');
        $customer_n  = $request->name;
        $customer_e = $request->email;


        $customer_data = Customer::create([
            'area_id'           => $request->area_id,
            'package_id'        => $request->package_id,
            'customer_id'       => $this->generateUniqueCode(),
            'name'              => $request->name,
            'email'             => $request->email,
            'address'           => $request->address,
            'phone'             => $request->phone,
            'nid'               => $request->nid,
            'register_date'     => $request->register_date,
        ]);


        User::insert([
            'customer_id'       => $customer_data->id,
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($customer_password),
            'phone'             => $request->phone,
            'gender'            => $request->gender,
            'address'           => $request->address,
            'type'              => 3,
            'created_by'        => auth()->id(),
            'created_at'        => Carbon::now(),
        ]);



        Mail::to($request->email)->send(new CustomerMail($customer_password, $customer_n, $customer_e));

        return back()->with('success', 'Successfully create Customer Account');
    }


    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Customer::where("customer_id", "=", $code)->first());

        return $code;
    }






    public function show(Customer $customer)
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
        $customers_id = User::find($id)->customer_id;

        $customer = User::find($id);
        $customer_data = Customer::find($customers_id);
        $areas = Area::all();
        $packages = Package::all();
        return view('backend.customer.edit', compact('customer', 'customer_data', 'areas', 'packages'));
    }




    /*
    |--------------------------------------------------------------------------
    |                              UPDATE METHOD
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'                  => 'required',
            'email'                 => 'required | email',
            'phone'                 => 'required',
            'gender'                => 'required',
            'address'               => 'required',
            'nid'                   => 'required',
            'area_id'               => 'required',
            'package_id'            => 'required',
            'image'                 => 'image | mimes:png,jpg,jpeg',
        ], [
            'name.required'         => 'This field is Required',
            'email.required'        => 'This field is Required',
            'email.email'           => 'Enter a valid email',
            'phone.required'        => 'This field is Required',
            'gender.required'       => 'This field is Required',
            'address.required'      => 'This field is Required',
            'nid.required'          => 'This field is Required',
            'area_id.required'      => 'This field is Required',
            'package_id.required'   => 'This field is Required',
            'image.image'           => 'Please choose a image file',
            'image.mimes'           => 'Please choose a png, jpg or jpeg File',
        ]);

        $userd = User::find($id);
        $customers_id = User::find($id)->customer_id;

        if ($request->hasFile('image')) {
            if ($userd->image != 'default.png') {
                unlink(base_path('public/backend/assets/images/profile-pic/' . $userd->image));
            }
            $img = Image::make($request->image);
            $img_name = $userd->type . $customers_id->name . Str::random('5') . '.' . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/profile-pic/' . $img_name));

            User::find($id)->update([
                'image' => $img_name,
            ]);

            Customer::find($customers_id)->update([
                'image' => $img_name,
            ]);
        }


        User::find($id)->update([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'gender'        => $request->gender,
            'address'       => $request->address,
            'updated_by'    => auth()->id(),
        ]);



        Customer::find($customers_id)->update([
            'area_id'       =>$request->area_id,
            'package_id'    =>$request->package_id,
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'nid'           => $request->nid,
        ]);


        return back()->with('success', 'Successfully updated Customer Profile');
    }




    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $customers_id = User::find($id)->customer_id;

        User::find($id)->delete();

        Customer::find($customers_id)->delete();

        return back()->with('success', 'Successfully deleted your Customer');
    }
    



    /*
    |--------------------------------------------------------------------------
    |                          ACTIVE CUSTOMER METHOD
    |--------------------------------------------------------------------------
    */
    public function activeCustomer(){
        $customers = User::where('type', '3')->where('status', '1')->get();
        return view('backend.customer.active-customer', compact('customers'));
    }




    /*
    |--------------------------------------------------------------------------
    |                            DEACTIVE CUSTOMER METHOD
    |--------------------------------------------------------------------------
    */
    public function deactiveCustomer(){
        $customers = User::where('type', '3')->where('status', '0')->get();
        return view('backend.customer.deactive-customer', compact('customers'));
    }
}

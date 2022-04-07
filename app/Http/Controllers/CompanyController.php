<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class CompanyController extends Controller
{




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index(){
        $company = Company::first();
        return view('backend.company.view', compact('company'));
    }





    /*
    |--------------------------------------------------------------------------
    |                              UPDATE METHOD
    |--------------------------------------------------------------------------
    */
    public function update(Request $request){

        $request->validate([
            'name'                      => 'required',
            'title'                     => 'required',
            'address'                   => 'required',
            'web_address'               => 'required',
            'email'                     => 'required',
            'phone'                     => 'required',
            'google_map_link'           => 'required',
            'logo'                      => 'image | mimes:png,jpg,jpeg',
            'favicon'                   => 'image | mimes:png,jpg,jpeg',
        ], [
            'name.required'             => 'This field is Required',
            'title.required'            => 'This field is Required',
            'address.required'          => 'This field is Required',
            'web_address.required'      => 'This field is Required',
            'email.required'            => 'This field is Required',
            'phone.required'            => 'This field is Required',
            'google_map_link.required'  => 'This field is Required',
            'logo.image'                => 'Please choose a image file',
            'logo.mimes'                => 'Please choose a png, jpg or jpeg File',
            'favicon.image'             => 'Please choose a image file',
            'favicon.mimes'             => 'Please choose a png, jpg or jpeg File',
        ]);

        $company_id = Company::first();

        if ($request->hasFile('logo')) {
            if ($company_id->logo != 'default_logo.png') {
                unlink(base_path('public/backend/assets/images/company/' . $company_id->logo));
            }
            $img = Image::make($request->logo);
            $img_name = $company_id->name . Str::random('5') . '.' . $request->logo->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/company/' . $img_name));

            Company::first()->update([
                'logo' => $img_name,
            ]);
        }

        if ($request->hasFile('favicon')) {
            if ($company_id->favicon != 'default_favicon.png') {
                unlink(base_path('public/backend/assets/images/company/' . $company_id->favicon));
            }
            $img = Image::make($request->favicon);
            $img_name = $company_id->name . Str::random('5') . '.' . $request->favicon->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/company/' . $img_name));

            Company::first()->update([
                'favicon' => $img_name,
            ]);
        }

        Company::first()->update([
            'name'              => $request->name,
            'title'             => $request->title,
            'description'       => $request->description,
            'address'           => $request->address,
            'web_address'       => $request->web_address,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'google_map_link'   => $request->google_map_link,
            'fb_page_link'      => $request->fb_page_link,
            'updated_at'        => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated your Company Profile');
    }
}

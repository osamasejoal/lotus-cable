@extends('layouts.app')

@section('main-content')
    <section style="margin-top: 10px" id="main-content" class="get-in-touch text-center">
        <div class="row">

            {{-- <section class="get-in-touch"> --}}
            <h1 class="title m-auto">Create Account</h1>

            


            <!--
            |--------------------------------------------------------------------------
            |                           ACCOUNT TYPE
            |--------------------------------------------------------------------------
            -->
            <form id="staff" class="contact-form row m-auto col-lg-12">
                <div class="form-field col-lg-6" style="margin: auto; margin-bottom:5rem;">
                    <label class="label" for="account-type">Account For *</label>

                    <select style="background-color:transparent;" id="account-type" class="typeaccount input-text js-input">
                        <option value="">-- Account for --</option>
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                            <option value="3">Customer</option>
                    </select>
                </div>
            </form>

            


            <!--
            |--------------------------------------------------------------------------
            |                           ADMIN FORM
            |--------------------------------------------------------------------------
            -->
            <form id="admin-form" style="display: none" id="admin-form" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf


                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name *</label>
                    <input value="{{ old('name') }}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="email">Email *</label>
                    <input value="{{ old('email') }}" name="email" id="email" class="input-text js-input" type="text">


                    @error('email')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>




                <div class="form-field col-lg-6">
                    <label class="label" for="phone">Phone *</label>
                    <input value="{{ old('phone') }}" name="phone" id="phone" class="input-text js-input" type="text">


                    @error('phone')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="gender">Gender</label>
                    <select style="background-color:transparent" name="gender" id="gender" class="input-text js-input">
                        <option value="">-- Gender --</option>
                        <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Male</option>
                        <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Female</option>
                        <option value="3" {{ old('gender') == 3 ? 'selected' : '' }}>Others</option>
                    </select>


                    @error('gender')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="address">Address *</label>
                    <input value="{{ old('address') }}" name="address" id="address" class="input-text js-input"
                        type="text">


                    @error('address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <button class="submit-btn" type="submit">Create Admin</button>
                </div>
            </form>
            
            


            <!--
            |--------------------------------------------------------------------------
            |                           STAFF FORM
            |--------------------------------------------------------------------------
            -->
            <form id="staff-form" style="display: none" action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf


                <div class="form-field col-lg-6">
                    <label class="label" for="area_id">Select Area *</label>
                    <select style="background-color:transparent;" name="area_id" id="area_id" class="input-text js-input">
                        <option value="">-- Area --</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>


                    @error('area_id')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name *</label>
                    <input value="{{ old('name') }}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="email">Email *</label>
                    <input value="{{ old('email') }}" name="email" id="email" class="input-text js-input" type="text">


                    @error('email')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>




                <div class="form-field col-lg-6">
                    <label class="label" for="phone">Phone *</label>
                    <input value="{{ old('phone') }}" name="phone" id="phone" class="input-text js-input" type="text">


                    @error('phone')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="gender">Gender</label>
                    <select style="background-color:transparent" name="gender" id="gender" class="input-text js-input">
                        <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Male</option>
                        <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Female</option>
                        <option value="3" {{ old('gender') == 3 ? 'selected' : '' }}>Others</option>
                    </select>


                    @error('gender')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>




                <div class="form-field col-lg-6">
                    <label class="label" for="address">Address *</label>
                    <input value="{{ old('address') }}" name="address" id="address" class="input-text js-input"
                        type="text">


                    @error('address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <button class="submit-btn" type="submit">Create Staff</button>
                </div>
            </form>
            
            


            <!--
            |--------------------------------------------------------------------------
            |                           CUSTOMER FORM
            |--------------------------------------------------------------------------
            -->
            <div id="customer-form" style="display: none">
            <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf


                <!-- Select Area -->
                <div class="form-field col-lg-6">
                    <label class="label" for="area_id">Select Area *</label>
                    <select style="background-color:transparent;" name="area_id" id="area_id" class="input-text js-input">
                        <option value="">-- Area --</option>
                        @foreach ($areas as $area)
                        <option value="{{$area->id}}">{{$area->name}}</option>
                        @endforeach
                    </select>
                    
                    
                    @error('area_id')
                    <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>
                
                
                <!-- Select Package -->
                <div class="form-field col-lg-6">
                    <label class="label" for="package_id">Select Package *</label>
                    <select style="background-color:transparent;" name="package_id" id="package_id" class="input-text js-input">
                        <option value="">-- Package --</option>
                        @foreach ($packages as $package)
                            <option value="{{$package->id}}">{{$package->name}}</option>
                        @endforeach
                    </select>


                    @error('package_id')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Customer Name -->
                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name *</label>
                    <input value="{{old('name')}}" name="name" id="name" class="input-text js-input" type="text">
                    
                    
                    @error('name')
                    <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>
                
                
                <!-- Customer Email -->
                <div class="form-field col-lg-6">
                    <label class="label" for="email">Email *</label>
                    <input value="{{old('email')}}" name="email" id="email" class="input-text js-input" type="text">


                    @error('email')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Customer Phone -->
                <div class="form-field col-lg-6">
                    <label class="label" for="phone">Phone *</label>
                    <input value="{{old('phone')}}" name="phone" id="phone" class="input-text js-input" type="text">


                    @error('phone')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>
                

                <!-- Customer Address -->
                <div class="form-field col-lg-6">
                    <label class="label" for="address">Address *</label>
                    <input value="{{old('address')}}" name="address" id="address" class="input-text js-input" type="text">


                    @error('address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Customer Gender -->
                <div class="form-field col-lg-6">
                    <label class="label" for="gender">Gender</label>
                    <select style="background-color:transparent" name="gender" id="gender" class="input-text js-input">
                        <option value="1" {{old('gender') == 1 ? 'selected' : ''}}>Male</option>
                        <option value="2" {{old('gender') == 2 ? 'selected' : ''}}>Female</option>
                        <option value="3" {{old('gender') == 3 ? 'selected' : ''}}>Others</option>
                    </select>


                    @error('gender')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Customer NID Number -->
                <div class="form-field col-lg-6">
                    <label class="label" for="nid">Nid Number *</label>
                    <input value="{{old('nid')}}" name="nid" id="nid" class="input-text js-input" type="text">


                    @error('nid')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Regtister Date -->
                <div class="form-field col-lg-6">
                    <label class="label" for="register_date">Register Date *</label>
                    <input value="{{old('register_date')}}" name="register_date" id="register_date" class="input-text js-input" type="date">


                    @error('register_date')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>
                

                <div class="form-field col-lg-12">
                    <button class="submit-btn" type="submit" style="min-width: 230px">Create Customer</button>
                </div>
            </form>
            </div>


    </section>
@endsection

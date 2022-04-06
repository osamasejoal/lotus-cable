@extends('layouts.app')

@section('main-content')
    <section style="margin-top: 10px" id="main-content" class="get-in-touch text-center">
        <div class="row">

            {{-- <section class="get-in-touch"> --}}
            <h1 class="title m-auto">Update Customer Profile</h1>

            @if (session('success'))
                <div class="alert alert-success col-12 mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf
                @method('PUT')


                <!-- Edit Customer Name -->
                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name</label>
                    <input value="{{ $customer->name }}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Edit Customer Email -->
                <div class="form-field col-lg-6">
                    <label class="label" for="email">Email</label>
                    <input value="{{ $customer->email }}" name="email" id="email" class="input-text js-input" type="text">


                    @error('email')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Edit Customer Phone -->
                <div class="form-field col-lg-6">
                    <label class="label" for="phone">Phone</label>
                    <input value="{{ $customer->phone }}" name="phone" id="phone" class="input-text js-input" type="text">


                    @error('phone')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Edit Customer Gender -->
                <div class="form-field col-lg-6">
                    <label class="label" for="gender">Gender</label>
                    <select style="background-color:transparent" name="gender" id="gender" class="input-text js-input">
                        <option value="1" {{ $customer->gender == 1 ? 'selected' : '' }}>Male</option>
                        <option value="2" {{ $customer->gender == 2 ? 'selected' : '' }}>Female</option>
                        <option value="0" {{ $customer->gender == 3 ? 'selected' : '' }}>Others</option>
                    </select>


                    @error('gender')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Edit Customer Address -->
                <div class="form-field col-lg-6">
                    <label class="label" for="address">Address</label>
                    <input value="{{ $customer->address }}" name="address" id="address" class="input-text js-input"
                        type="text">


                    @error('address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Edit Customer NID -->
                <div class="form-field col-lg-6">
                    <label class="label" for="nid">NID Number</label>
                    <input value="{{ $customer_data->nid }}" name="nid" id="nid" class="input-text js-input"
                        type="text">


                    @error('nid')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Edit Customer Area -->
                <div class="form-field col-lg-6">
                    <label class="label" for="area_id">Area</label>
                    <select style="background-color:transparent" name="area_id" id="area_id" class="input-text js-input">
                        <option value="">-- Area --</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}" {{ $area->id == $customer_data->area_id ? 'selected' : '' }}>{{ $area->name }}</option>
                        @endforeach
                    </select>


                    @error('area_id')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Edit Customer Package -->
                <div class="form-field col-lg-6">
                    <label class="label" for="package_id">Package</label>
                    <select style="background-color:transparent" name="package_id" id="package_id" class="input-text js-input">
                        <option value="">-- Package --</option>
                        @foreach ($packages as $package)
                            <option value="{{ $package->id }}" {{ $package->id == $customer_data->package_id ? 'selected' : '' }}>{{ $package->name }}</option>
                        @endforeach
                    </select>


                    @error('package_id')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Previous profile picture -->
                <div style="flex-direction: row" class="form-field col-lg-12">
                    <label class="label my-auto" for="preimg">Previous
                        Profile Picture</label>
                    <img style="border-radius: 5px; margin-left: 10rem" width="250px"
                        src="{{ asset('backend/assets/images/profile-pic' . '/' . $customer->image) }}" alt=""
                        id="preimg">
                </div>


                <!-- Choose new Profile Picture -->
                <div class="form-field col-lg-6">
                    <label class="label" for="image">Choose New Profile Picture</label>
                    <input name="image" id="image" class="input-text js-input" type="file">


                    @error('image')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <button class="submit-btn" type="submit">Update</button>
                </div>
            </form>

        </div>
    </section>
@endsection

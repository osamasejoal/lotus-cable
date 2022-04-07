@extends('backend.layouts.master')

@section('main-content')


    <section style="margin-top: 10px" id="main-content" class="get-in-touch text-center">
        <div class="row">

            {{-- <section class="get-in-touch"> --}}
            <h1 class="title m-auto">Update Admin Profile</h1>

            @if (session('success'))
                <div class="alert alert-success col-12 mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.update', $admin->id) }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf
                @method('PUT')


                <!-- Name -->
                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name</label>
                    <input value="{{$admin->name}}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                    <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Email -->
                <div class="form-field col-lg-6">
                    <label class="label" for="email">Email</label>
                    <input value="{{$admin->email}}" name="email" id="email" class="input-text js-input" type="text">


                    @error('email')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="phone">Phone</label>
                    <input value="{{$admin->phone}}" name="phone" id="phone" class="input-text js-input" type="text">


                    @error('phone')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="gender">Gender</label>
                    <select style="background-color:transparent" name="gender" id="gender" class="input-text js-input">
                        <option value="1" {{$admin->gender == 1 ? 'selected' : ''}}>Male</option>
                        <option value="2" {{$admin->gender == 2 ? 'selected' : ''}}>Female</option>
                        <option value="0" {{$admin->gender == 3 ? 'selected' : ''}}>Others</option>
                    </select>


                    @error('gender')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="address">Address</label>
                    <input value="{{$admin->address}}" name="address" id="address" class="input-text js-input" type="text">


                    @error('address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div style="flex-direction: row" class="form-field col-lg-12">
                    <label class="label my-auto" for="preimg">Previous
                        Profile Picture</label>
                    <img style="border-radius: 5px; margin-left: 10rem" width="250px"
                        src="{{ asset('backend/assets/images/profile-pic' . '/' . $admin->image) }}" alt=""
                        id="preimg">
                </div>


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

@extends('layouts.app')



@section('main-style-content')
    {{-- Style for Form --}}
    <link rel="stylesheet" href="{{ asset('backend/form/style.css') }}">
    {{-- END Style for Form --}}
@endsection



@section('main-content')


    <section style="margin-top: 10px" id="main-content" class="get-in-touch text-center">
        <div class="row">

            {{-- <section class="get-in-touch"> --}}
            <h1 class="title m-auto">Update Staff Profile</h1>

            @if (session('success'))
                <div class="alert alert-success col-12 mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf
                @method('PUT')
                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name</label>
                    <input value="{{$staff->name}}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="email">Email</label>
                    <input value="{{$staff->email}}" name="email" id="email" class="input-text js-input" type="text">


                    @error('email')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="phone">Phone</label>
                    <input value="{{$staff->phone}}" name="phone" id="phone" class="input-text js-input" type="text">


                    @error('phone')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="gender">Gender</label>
                    <select style="background-color:transparent" name="gender" id="gender" class="input-text js-input">
                        <option value="1" {{$staff->gender == 1 ? 'selected' : ''}}>Male</option>
                        <option value="2" {{$staff->gender == 2 ? 'selected' : ''}}>Female</option>
                        <option value="0" {{$staff->gender == 3 ? 'selected' : ''}}>Others</option>
                    </select>


                    @error('gender')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="address">Address</label>
                    <input value="{{$staff->address}}" name="address" id="address" class="input-text js-input" type="text">


                    @error('address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="status">Status</label>
                    <select style="background-color:transparent" name="status" id="status" class="input-text js-input">
                        <option value="1" {{$staff->status == 1 ? 'selected' : ''}}>On</option>
                        <option value="0" {{$staff->status == 2 ? 'selected' : ''}}>Off</option>
                    </select>


                    @error('status')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div style="flex-direction: row" class="form-field col-lg-12">
                    <label class="label my-auto" for="preimg">Previous
                        Profile Picture</label>
                    <img style="border-radius: 5px; margin-left: 10rem" width="250px"
                        src="{{ asset('backend/assets/images/profile-pic' . '/' . $staff->image) }}" alt=""
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




@section('main-script-content')
    {{-- Script for Form in Banner/Edit --}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    {{-- END Script for Form in Banner/Edit --}}
@endsection

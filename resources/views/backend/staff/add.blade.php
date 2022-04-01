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
            <h1 class="title m-auto">Create Staff</h1>

            @if (session('success'))
                <div class="alert alert-success col-12 mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf


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


                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name *</label>
                    <input value="{{old('name')}}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="email">Email *</label>
                    <input value="{{old('email')}}" name="email" id="email" class="input-text js-input" type="text">


                    @error('email')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>




                <div class="form-field col-lg-6">
                    <label class="label" for="phone">Phone *</label>
                    <input value="{{old('phone')}}" name="phone" id="phone" class="input-text js-input" type="text">


                    @error('phone')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="gender">Gender *</label>
                    <select style="background-color:transparent" name="gender" id="gender" class="input-text js-input">
                        <option value="1" {{old('gender') == 1 ? 'selected' : ''}}>Male</option>
                        <option value="2" {{old('gender') == 2 ? 'selected' : ''}}>Female</option>
                        <option value="0" {{old('gender') == 3 ? 'selected' : ''}}>Others</option>
                    </select>


                    @error('gender')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                

                <div class="form-field col-lg-6">
                    <label class="label" for="address">Address *</label>
                    <input value="{{old('address')}}" name="address" id="address" class="input-text js-input" type="text">


                    @error('address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <button class="submit-btn" type="submit">Create</button>
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

@extends('layouts.app')

@section('main-content')


    <section style="margin-top: 10px; max-width: 1000px" id="main-content" class="get-in-touch text-center">
        <div class="row">

            {{-- <section class="get-in-touch"> --}}
            <h1 class="title m-auto">Company Profile</h1>

            @if (session('success'))
                <div class="alert alert-success col-12 mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('company.update') }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf


                <div class="form-field col-lg-6">
                    <label class="label" for="name">Company Name *</label>
                    <input value="{{$company->name}}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="email">Company Email *</label>
                    <input value="{{$company->email}}" name="email" id="email" class="input-text js-input" type="text">


                    @error('email')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="phone">Company Phone *</label>
                    <input value="{{$company->phone}}" name="phone" id="phone" class="input-text js-input" type="text">


                    @error('phone')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="address">Address *</label>
                    <input value="{{$company->address}}" name="address" id="address" class="input-text js-input" type="text">


                    @error('address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <label class="label" for="title">Title *</label>
                    <input value="{{$company->title}}" name="title" id="title" class="input-text js-input" type="text">


                    @error('title')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <label class="label" for="description">description</label>
                    <textarea style="background-color:transparent" name="description" id="description" cols="30" rows="4">{{$company->description}}</textarea>


                    @error('description')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>
                

                <div class="form-field col-lg-12">
                    <label class="label" for="web_address">Web Address *</label>
                    <input value="{{$company->web_address}}" name="web_address" id="web_address" class="input-text js-input" type="text">


                    @error('web_address')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <label class="label" for="google_map_link">Google Map Link *</label>
                    <input value="{{$company->google_map_link}}" name="google_map_link" id="google_map_link" class="input-text js-input" type="text">


                    @error('google_map_link')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <label class="label" for="fb_page_link">Facebook Page</label>
                    <input value="{{$company->fb_page_link}}" name="fb_page_link" id="fb_page_link" class="input-text js-input" type="text">


                    @error('fb_page_link')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div style="flex-direction: row" class="form-field col-lg-6">
                    <label class="label my-auto" for="preimg">Company Logo</label>
                    <img style="margin-left: 2rem" width="100px"
                        src="{{ asset('backend/assets/images/company' . '/' . $company->logo) }}" alt=""
                        id="preimg">
                </div>

                <div class="form-field col-lg-6">
                    <label class="label" for="logo">Update your Logo</label>
                    <input name="logo" id="logo" class="input-text js-input" type="file">


                    @error('logo')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div style="flex-direction: row" class="form-field col-lg-6">
                    <label class="label my-auto" for="preimg">Web Favicon</label>
                    <img style="margin-left: 2rem" width="100px"
                        src="{{ asset('backend/assets/images/company' . '/' . $company->favicon) }}" alt=""
                        id="preimg">
                </div>

                <div class="form-field col-lg-6">
                    <label class="label" for="favicon">Update your Favicon</label>
                    <input name="favicon" id="favicon" class="input-text js-input" type="file">


                    @error('favicon')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-12">
                    <button class="submit-btn" type="submit">update</button>
                </div>
            </form>

        </div>
    </section>


@endsection

@extends('backend.layouts.master')

@section('main-content')
    <section style="margin-top: 10px" id="main-content" class="get-in-touch text-center">
        <div class="row">

            {{-- <section class="get-in-touch"> --}}
            <h1 class="title m-auto">Update Package</h1>

            @if (session('success'))
                <div class="alert alert-success col-12 mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('package.update', $package->id) }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf
                @method('PUT')


                <!-- Package Name -->
                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name</label>
                    <input value="{{ $package->name }}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Package Amount -->
                <div class="form-field col-lg-6">
                    <label class="label" for="amount">amount</label>
                    <input value="{{ $package->amount }}" name="amount" id="amount" class="input-text js-input"
                        type="number">


                    @error('amount')
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

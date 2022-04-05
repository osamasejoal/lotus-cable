@extends('layouts.app')

@section('main-content')


    <section style="margin-top: 10px" id="main-content" class="get-in-touch text-center">
        <div class="row">

            {{-- <section class="get-in-touch"> --}}
            <h1 class="title m-auto">Update Transaction Option</h1>

            @if (session('success'))
                <div class="alert alert-success col-12 mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('transaction-option.update', $trans_option->id) }}" method="POST" enctype="multipart/form-data"
                class="contact-form row m-auto">
                @csrf
                @method('PUT')


                <div class="form-field col-lg-6">
                    <label class="label" for="name">Name</label>
                    <input value="{{$trans_option->name}}" name="name" id="name" class="input-text js-input" type="text">


                    @error('name')
                        <span class="text-danger text-left">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-field col-lg-6">
                    <label class="label" for="status">Status</label>
                    <select style="background-color:transparent" name="status" id="status" class="input-text js-input">
                        <option value="1" {{$trans_option->status == 1 ? 'selected' : ''}}>Active</option>
                        <option value="0" {{$trans_option->status == 0 ? 'selected' : ''}}>Deactive</option>
                    </select>


                    @error('status')
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


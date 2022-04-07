@extends('auth.layouts.master')

@section('auth-content')
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="sign-avatar no-photo">&plus;</div>
                    <header class="sign-title">Sign Up</header>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="E-Mail" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat password" />
                    </div>
                    <button type="submit" class="btn btn-rounded btn-success sign-up">Sign up</button>
                    <p class="sign-note">Already have an account? <a href="{{route('login')}}">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>
    <!--.page-center-->
@endsection

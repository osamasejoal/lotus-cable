@extends('layouts.auth-master')

@section('auth-content')
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="sign-avatar">
                        <img src="{{asset('backend/assets')}}/img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title">Sign In</header>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="E-Mail" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in" />
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                        <div class="float-right reset">
                            <a href="reset-password.html">Reset Password</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded">Sign in</button>
                    <p class="sign-note">New to our website? <a href="{{route('register')}}">Sign up</a></p>
                    <!--<button type="button" class="close">
                            <span aria-hidden="true">&times;</span>
                        </button>-->
                </form>
            </div>
        </div>
    </div>
    <!--.page-center-->
@endsection

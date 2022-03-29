@extends('layouts.login-register')

@section('main-content')
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box">
                    <div class="sign-avatar no-photo">&plus;</div>
                    <header class="sign-title">Sign Up</header>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-Mail" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repeat password" />
                    </div>
                    <button type="submit" class="btn btn-rounded btn-success sign-up">Sign up</button>
                    <p class="sign-note">Already have an account? <a href="sign-in.html">Sign in</a></p>
                    <!--<button type="button" class="close">
                            <span aria-hidden="true">&times;</span>
                        </button>-->
                </form>
            </div>
        </div>
    </div>
    <!--.page-center-->
@endsection

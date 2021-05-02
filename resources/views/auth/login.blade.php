<?php $title = "Login"; ?>
@extends("auth.master")

@section('content')
    <section class="w3l-login">
        <div class="w3l-form-36-mian">
            <div class="container">
                <div class="logo text-center">
                    <a class="brand-logo" href="{{route('welcome')}}"><img src="{{asset("assets/images/logo-icon.png")}}" alt="" />Skill</a>
                    <!-- if logo is image enable this
                            <a class="brand-logo" href="#index.html">
                              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                            </a> -->
                </div>
                <div class="form-inner-cont">
                    <h3>Login</h3>
                    <h6>To continue with Us</h6>
                    <form action="{{route('login')}}" method="post" class="signin-form">
                        @csrf
                        <div class="form-input">
                            <input type="email" name="email" placeholder="Email address or username" required="" autofocus>
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Password" required="">
                        </div>
                        <label class="check-remaind">
                            <input type="checkbox" name="remember">
                            <span class="checkmark"></span>
                            <p class="remember">Remember me</p>

                        </label>

                        <button type="submit" class="btn btn-primary theme-button mt-4">Log in</button>
{{--                        <div class="new-signup">--}}
{{--                            <a href="#reload" class="signuplink">Forgot username or password?</a>--}}

{{--                        </div>--}}
                    </form>
                    <p class="signup">Don’t have account yet? <a href="{{route('register')}}" class="signuplink">Get it now</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('auth.master')

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
                    <h3>Sign up</h3>
                    <h6>To continue with Us</h6>
                    <form action="{{route('register')}}" method="post" class="signin-form">
                        @if (request()->has('teacher'))
                            <input type="hidden" name="role" value="teacher" readonly>
                        @endif
                        @csrf
                        <div class="form-input">
                            <input type="text" name="name" placeholder="Enter your name" required="" autofocus>
                        </div>
                        <div class="form-input">
                            <input type="email" name="email" placeholder="Email address" required="">
                        </div>
                        <div class="form-input">
                            <input type="text" name="mobile" placeholder="Enter mobile number" required="" autofocus>
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="form-input">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required="">
                        </div>
                        <button type="submit" class="btn btn-primary theme-button mt-4">Sign Up</button>
                    </form>
                    <p class="signup">Already have account? <a href="{{route('login')}}" class="signuplink">Login now</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection

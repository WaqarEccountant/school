<?php $title = "Login"; ?>
@extends("auth.master")

@section('content')
    <section class="w3l-login">
        <div class="w3l-form-36-mian">
            <div class="container">
                <div class="logo text-center">
                    <a class="brand-logo" href="{{route('welcome')}}"><img src="{{asset("assets/images/logo-icon.png")}}" alt=""/>Skill</a>
                    <!-- if logo is image enable this
                            <a class="brand-logo" href="#index.html">
                              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                            </a> -->
                </div>
                <div class="form-inner-cont">
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>
                    <form action="{{ route('verification.send') }}" method="post" class="signin-form">
                        @csrf


                        <button type="submit" class="btn btn-primary theme-button mt-4">Resend Verification Email</button>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

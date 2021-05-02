<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("admin-assets/img/apple-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("admin-assets/img/favicon.png")}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{asset("admin-assets/css/bootstrap.min.css")}}" rel="stylesheet"/>
    <link href="{{asset("admin-assets/css/now-ui-dashboard.css?v=1.5.0")}}" rel="stylesheet"/>

    <style>
        .wrapper, .content {
            display: flex;
        }

        .wrapper {
            width:           100vw;
            height:          100vh;
            /*background: gredient();*/
            /*background: #1b395c;*/
            justify-content: center;
            align-items:     center;
        }

        .content {
            padding:       25px;
            border-radius: 15px;
            /*background:      var(--orange) !important;*/
            /*margin:        auto;*/
            border:        1px solid #fff;
            background:    #fff !important;
        }
    </style>
</head>
<body class="">
<div class="wrapper panel-header">
    <div class="content ">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" value="{{ old('name') }}" placeholder="Name">
                @if($errors->has('name'))
                    <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                @endif
            </div>
            <div class="form-group no-border">
                <label for="email">Email</label>
                <input id="email" type="text" name="email" class="form-control {{ $errors->has('email') ? "is-invalid" : "" }}" value="{{ old('email') }}" placeholder="Email">
                @if($errors->has('email'))
                    <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                @endif
            </div>
            <div class="form-group no-border">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="form-control {{ $errors->has('password') ? "is-invalid" : "" }}" value="{{ old('password') }}" placeholder="Password">
                @if($errors->has('password'))
                    <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
                @endif
            </div>
            <div class="form-group no-border">
                <label for="password-confirmation">Confirm Password</label>
                <input id="password-confirmation" type="password" name="password_confirmation" class="form-control {{ $errors->has('password') ? "is-invalid" : "" }}" value="{{ old('password') }}" placeholder="Password">
                @if($errors->has('password'))
                    <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
                @endif
            </div>

            <div class="text-right form-group">
                <button class="btn btn-sm btn-block btn-primary">Register</button>
            </div>
            <div class="form-group">
                Already have an account? <a href="{{route('login')}}">Login</a>
            </div>

        </form>
    </div>
</div>
</body>
</html>

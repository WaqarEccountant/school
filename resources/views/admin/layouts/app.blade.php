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
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("assets/images/logo-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("admin-assets/img/favicon.png")}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        {{$title??"Home"}} - {{config('app.name')}}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{asset("admin-assets/css/bootstrap.min.css")}}" rel="stylesheet"/>
    <link href="{{asset("admin-assets/css/now-ui-dashboard.css?v=1.5.0")}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
{{--    <link href="{{asset("admin-assets/demo/demo.css")}}" rel="stylesheet"/>--}}
</head>

<body class="">
<div class="wrapper ">
    @include('admin.layouts.sidebar')
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
    @include('admin.layouts.navbar')
    <!-- End Navbar -->
        <div class="panel-header panel-header-sm">
            {{--            <canvas id="bigDashboardChart"></canvas>--}}
        </div>
        <div class="content">
            @yield('content')
        </div>
        @include('admin.layouts.footer')
    </div>
</div>
{{--@dd(session()->has('msg'), session('msg'))--}}
<!--   Core JS Files   -->
<script src="{{asset("admin-assets/js/core/jquery.min.js")}}"></script>
<script src="{{asset("admin-assets/js/core/popper.min.js")}}"></script>
<script src="{{asset("admin-assets/js/core/bootstrap.min.js")}}"></script>
<script src="{{asset("admin-assets/js/plugins/perfect-scrollbar.jquery.min.js")}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset("admin-assets/js/plugins/bootstrap-notify.js")}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
{{--<script src="{{asset("assets/js/now-ui-dashboard.min.js?v=1.5.0")}}" type="text/javascript"></script>--}}
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
{{--<script src="../assets/demo/demo.js"></script>--}}
{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        // Javascript method's body can be found in assets/js/demos.js--}}
{{--        demo.initDashboardPageCharts();--}}

{{--    });--}}
{{--</script>--}}
<script>
    function showNotification(color, msg) {
        $.notify({
            icon: "now-ui-icons ui-1_bell-53",
            message: msg

        }, {
            type: color,
            delay: 2000,
            placement: {
                from: 'top',
                align: 'right'
            }
        });
    }
    @if(session()->has('msg') && session('msg') != '')
        <?php
        $msg = session('msg', '');
        if (strpos($msg, '|') !== false) {
            list($type, $msg) = explode('|', $msg);
        } else {
            $type = 'error';
        }

        switch ($type) {
            case 'success':
                $color = 'success';
                break;
            default:
                $color = 'danger';
        }
        ?>
        showNotification("{{$color}}","{{$msg}}")
    @endif
</script>
@stack('js')
</body>

</html>

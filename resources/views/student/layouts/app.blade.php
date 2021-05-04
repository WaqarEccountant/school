<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Skill an Education Category Bootstrap Responsive Website Template - Home </title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/style-liberty.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/flipclock.css")}}">
</head>
<body>
<!-- header -->
@include('student.layouts.header')
<!-- //header -->
@yield('breadcrum')

@yield('content')
<!-- footer -->
@include('student.layouts.footer')
<!-- Footer -->

<!-- JS -->
<script src="{{asset("assets/js/jquery-3.3.1.min.js")}}" ></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}" ></script>

<script src="{{asset("assets/js/jquery.waypoints.min.js")}}" ></script>
<script src="{{asset("assets/js/jquery.countup.js")}}" ></script>
<script src="{{asset("assets/js/owl.carousel.js")}}" ></script>
<script src="{{asset("assets/js/smartphoto.js")}}" ></script>
<script src="{{asset("assets/js/flipclock.min.js")}}" ></script>

@stack('js')
</body>

</html>

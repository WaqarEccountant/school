@extends("student.layouts.app")
@section('breadcrum')
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum">
            <div class="container">
                <p><a href="{{route('dashboard')}}">Dashboard</a></p>
            </div>
        </div>
    </section>
@endsection

@section('content')

    <section class="w3l-about1" id="about">
        <div id="cwp23-block" class="py-5">
            <div class="container py-lg-5">
                <div class="row cwp23-content align-items-center">
                    <div class="col-lg-6 cwp23-text">
                        <div class="cwp23-title">
                            <h3>Welcome to the Professional Education Theme! </h3>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

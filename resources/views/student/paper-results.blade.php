@extends("student.layouts.app")
@section('breadcrum')
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum">
            <div class="container">
                <p><a href="{{route('dashboard')}}">Dashboard</a> / Tests / Results</p>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="w3l-about1" id="about">
        <div id="cwp23-block" class="py-5">
            <div class="container py-lg-5">
                <div class="row cwp23-content align-items-center">
                    <div class="col-lg-12 cwp23-text d-flex justify-content-center">
                        <div class="cwp23-title text-center" style="width: max-content">
                            <h1>Your Result</h1>
                            <p><b>Marks :</b> {{$result->marks}} / {{$result->total}}</p>
                            @if ($result->wrong)
                                <p>Wrong Answered: {{$result->wrong}}</p>
                            @endif
                            @if ($result->missed)
                                <p>Not Answered: {{$result->missed}}</p>
                            @endif
                            <hr>
                            <div>
                                <a href="{{route('dashboard')}}">Back to Home</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')

@endpush

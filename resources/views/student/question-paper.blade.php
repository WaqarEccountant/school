@extends("student.layouts.app")
@section('breadcrum')
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum">
            <div class="container">
                <p><a href="{{route('dashboard')}}">Dashboard</a> / Tests / Attempt</p>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <style>
        .image-container {
            width: 300px;
        }

        .image-container img {
            width:  100%;
            height: auto;
        }
    </style>
    <section class="w3l-about1" id="about">
        <div id="cwp23-block" class="py-5">
            <div class="container py-lg-5 d-flex justify-content-center">
                <div class="clock" style="width: max-content"></div>
            </div>
            <div class="container py-lg-5">
                <div class="row cwp23-content align-items-center">
                    <div class="col-lg-12 cwp23-text">
                        <div class="cwp23-title">
                            <h1>Answer the following questions</h1>
                        </div>
                        <hr>
                        <form action="" id="paper-form" method="post">
                            @csrf
                            @if(isset($questions) && count($questions))
                                @php($sr=1)
                                @foreach($questions as $question)
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$sr++}}. {{$question->body}}</h5>
                                            @if ($question->q_image != '')
                                                <div class="image-container"><img src="{{asset('images/'.$question->q_image)}}" loading="lazy" class="img" alt=""></div>
                                            @endif
                                            <hr>
                                            @if ($question->type == 'subjective')
                                                <label for="answer{{$question->id}}"><strong>Your Answer</strong></label>
                                                <textarea name="answer[{{$question->id}}]" class="form-control" id="answer{{$question->id}}" rows="4"></textarea>
                                            @else
                                                <div class="row">
                                                    @foreach($question->options as $option)
                                                        <div class="col-6">
                                                            <label><input type="radio" name="answer[{{$question->id}}]" value="{{$option->id}}"> {{$option->body}}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                @endforeach
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            @endif
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
    <script>
        var clock;

        $(document).ready(function () {
            var clock;

            clock = $('.clock').FlipClock({
                // clockFace: 'DailyCounter',
                autoStart: false,
                callbacks: {
                    stop: function () {
                        $("#paper-form").submit()
                    }
                }
            });

            clock.setTime({{$exam->time*60}});
            clock.setCountdown(true);
            clock.start();

        });
    </script>
@endpush

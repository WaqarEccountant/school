@extends("student.layouts.app")
@section('breadcrum')
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum">
            <div class="container">
                <p><a href="{{route('dashboard')}}">Dashboard</a> / Tests / {{$type}}</p>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="w3l-about1" id="about">
        <div id="cwp23-block" class="py-5">
            <div class="container py-lg-5">
                <div class="row cwp23-content align-items-center">
                    <div class="col-lg-12 cwp23-text">
                        <div class="cwp23-title">
                            <h1>Select Test</h1>
                        </div>
                        <hr>

                        @if(isset($courses) && count($courses))

                            @foreach($courses as $course)
                                <h2 class="mb-4">{{$course->name}}</h2>
                                @if ($course->exams)
                                    <div class="row">
                                        @foreach($course->exams as $exam)
                                            <div class="card col-3">
                                                <div class="card-body">
                                                    <h5>
                                                        @if ($exam->fee)
                                                            <a href="javascript:void(0);" data-link="{{route('tests.attempt',$exam->id)}}" data-toggle="modal" data-target="#payment" onclick="addLink(this)">{{$exam->topic}} - {{$exam->title}}</a>
                                                        @else
                                                            <a href="{{route('tests.attempt',$exam->id)}}">{{$exam->topic}} - {{$exam->title}}</a>
                                                        @endif
                                                    </h5>
                                                    <div><strong>Entry fee</strong> : {{$exam->fee_display}}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach

                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Payment Modal -->
    <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="" id="payment-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="card_no">Card Number</label>
                            <input id="card_no" type="text" name="card_no" class="form-control {{ $errors->has('card_no') ? "is-invalid" : "" }}" value="{{ old('card_no') }}" placeholder="Card Number">
                            @if($errors->has('card_no'))
                                <strong class="invalid-feedback">{{ $errors->first('card_no') }}</strong>
                            @endif
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input id="cvv" type="text" name="cvv" class="form-control {{ $errors->has('cvv') ? "is-invalid" : "" }}" value="{{ old('cvv') }}" placeholder="CVV">
                                @if($errors->has('cvv'))
                                    <strong class="invalid-feedback">{{ $errors->first('cvv') }}</strong>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="expiry">Expiry Month/Year</label>
                                <input id="expiry" type="text" name="expiry" class="form-control {{ $errors->has('expiry') ? "is-invalid" : "" }}" value="{{ old('expiry') }}" placeholder="MM/YYYY">
                                @if($errors->has('expiry'))
                                    <strong class="invalid-feedback">{{ $errors->first('expiry') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        {{--                        <button type="submit" class="btn btn-primary">Pay</button>--}}
                        <a href="" class="btn btn-primary" id="payment-link">Pay</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <script>
        function addLink(e) {
            console.log(e)
            $('#payment-link').attr('href', $(e).data('link'))
        }
    </script>
@endpush

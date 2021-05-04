@extends("student.layouts.app")
@section('breadcrum')
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum">
            <div class="container">
                <p><a href="{{route('dashboard')}}">Dashboard</a> / LeadBoard</p>
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
                            <h1 class="text-center">Lead Board</h1>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Person</th>
                                        <th>Subject</th>
                                        <th>Marks</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (isset($results) && count($results))
                                        @php($sr=1)
                                        @foreach($results as $row)
                                            <tr>
                                                <th>{{$sr++}}</th>
                                                <td>{{$row->user ? $row->user->name : ''}}</td>
                                                <td>{{$row->subject ? $row->subject->name : ''}}</td>
                                                <td>{{$row->marks}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3">No results yet</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
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

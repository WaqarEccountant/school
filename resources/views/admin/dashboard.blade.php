@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Subjects</h4>
                </div>
                <div class="card-body">
                    <h1>{{$stats['subject']}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Exam Types</h4>
                </div>
                <div class="card-body">
                    <h1>{{$stats['exam_type']}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Exams</h4>
                </div>
                <div class="card-body">
                    <h1>{{$stats['exams']}}</h1>
                </div>
            </div>
        </div>

    </div>

@endsection

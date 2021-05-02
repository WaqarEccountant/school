<?php
$title = 'Edit Exam';
$user_id = \Auth::id();
?>
@extends('admin.layouts.app')

@section('content')
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header row">
                <h3 class="col">Update Exam</h3>
            </div>
            <div class="card-body">

                <form action="{{route('admin.exams.update',$exam->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" type="text" name="title" class="form-control {{ $errors->has('title') ? "is-invalid" : "" }}" value="{{ old('title')??$exam->title }}" placeholder="Title" autofocus required/>
                        @if($errors->has('title'))
                            <strong class="invalid-feedback">{{ $errors->first('title') }}</strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="topic">Topic</label>
                        <input id="topic" type="text" name="topic" class="form-control {{ $errors->has('topic') ? "is-invalid" : "" }}" value="{{ old('topic')??$exam->topic }}" placeholder="Topic" required>
                        @if($errors->has('topic'))
                            <strong class="invalid-feedback">{{ $errors->first('topic') }}</strong>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="type_id">Exam Type</label>
                        <select id="type_id" name="type_id" class="form-control {{ $errors->has('type_id') ? "is-invalid" : "" }}" required>
                            <option selected disabled>Select</option>
                            @foreach($types as $row)
                                <option value="{{$row->id}}" {{(old('type_id')??$exam->type_id) == $row->id ? 'selected' : '' }}>{{$row->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('type_id'))
                            <strong class="invalid-feedback">{{ $errors->first('type_id') }}</strong>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="subject_id">Subject</label>
                        <select id="subject_id" name="subject_id" class="form-control {{ $errors->has('subject_id') ? "is-invalid" : "" }}" required>
                            <option selected disabled>Select</option>
                            @foreach($subjects as $row)
                                <option value="{{$row->id}}" {{(old('subject_id')??$exam->subject_id) == $row->id ? 'selected' : '' }}>{{$row->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('subject_id'))
                            <strong class="invalid-feedback">{{ $errors->first('subject_id') }}</strong>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="time">Exam Time (in minutes)</label>
                        <input id="time" type="number" name="time" class="form-control {{ $errors->has('time') ? "is-invalid" : "" }}" min="1" step="1" value="{{ old('time')??$exam->time }}" placeholder="Time" required>
                        @if($errors->has('time'))
                            <strong class="invalid-feedback">{{ $errors->first('time') }}</strong>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="fee">Exam Fee</label>
                        <input id="fee" type="number" name="fee" class="form-control {{ $errors->has('fee') ? "is-invalid" : "" }}" min="0" step="1" value="{{ old('fee')??$exam->exam }}" placeholder="Exam Fee" required>
                        @if($errors->has('fee'))
                            <strong class="invalid-feedback">{{ $errors->first('fee') }}</strong>
                        @endif
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

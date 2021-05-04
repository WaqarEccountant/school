<?php
$title = 'Exam View';
$user_id = \Auth::id();
?>
@extends('admin.layouts.app')

@section('content')
    <style>
        .remove-wrapper {
            position: relative;
        }

        .remove {
            position: absolute;
            top:      0;
            right:    0;
            color:    var(--danger);
        }
    </style>
    <div class="card">
        <div class="card-header row">
            <h3 class="col">Exam Details</h3>
            <div class="col-2 text-right">
                <a href="{{route('admin.exams.create')}}" class="btn btn-sm btn-success">New</a>
                <a href="{{route('admin.exams.edit',$exam->id)}}" class="btn btn-sm btn-success">Edit</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td>{{$exam->title}}</td>
                        <th>Topic</th>
                        <td>{{$exam->topic}}</td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>{{$exam->subject?$exam->subject->name:''}}</td>
                        <th>Exam Type</th>
                        <td>{{$exam->type?$exam->type->name:''}}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{$exam->time}} mins</td>
                        <th>Exam Fee</th>
                        <td>{{$exam->fee?$exam->fee:"Free"}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <hr>

    <div class="card">
        <div class="card-header row">
            <h3 class="col">Questions</h3>
            @if (!isset($exam->questions) || count($exam->questions) < 200)
                <div class="col-2 text-right">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#addModal" class="btn btn-sm btn-primary">Add</a>
                </div>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="20">#</th>
                        <th>Body</th>
                        <th>Type</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($exam->questions) && count($exam->questions))
                        @php($sr=1)
                        @foreach($exam->questions as $question)
                            <tr>
                                <td>{{$sr++}}</td>
                                <td>{{$question->body}}</td>
                                <td>{{$question->type}}</td>
                                <td>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" data-toggle="modal" data-target="#deleteModal"
                                        data-link="{{route('admin.questions.destroy',$question->id)}}" onclick="deleteRow(this)">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="{{route('admin.questions.store')}}" enctype="multipart/form-data">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Question</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="exam_id" value="{{$exam->id}}">
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea id="body" name="body" class="form-control {{ $errors->has('body') ? "is-invalid" : "" }}" placeholder="Body" required>{{ old('body') }}</textarea>
                            @if($errors->has('body'))
                                <strong class="invalid-feedback">{{ $errors->first('body') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="q_image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select id="type" name="type" class="form-control {{ $errors->has('type') ? "is-invalid" : "" }}" required>
                                <option disabled>Select</option>
                                <option value="objective" {{old('type') == "objective" ? 'selected' : '' }}>Objective</option>
                                <option value="subjective" {{old('type') == "subjective" ? 'selected' : '' }}>Subjective</option>
                            </select>
                            @if($errors->has('type'))
                                <strong class="invalid-feedback">{{ $errors->first('type') }}</strong>
                            @endif
                        </div>

                        <div id="subjective-div" style="display: none;">
                            <div class="form-group">
                                <label for="answer">Answer</label>
                                <textarea id="answer" name="answer" class="form-control {{ $errors->has('answer') ? "is-invalid" : "" }}" placeholder="Answer">{{ old('answer') }}</textarea>
                                @if($errors->has('answer'))
                                    <strong class="invalid-feedback">{{ $errors->first('answer') }}</strong>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="a_image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div id="objective-div" >

                            <h5>Options</h5>
                            <div id="options" data-count="1">
                                <div id="row1" class="remove-wrapper">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="option[1][value]" placeholder="Value">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <input type="radio" name="correct" value="1">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button type="button" onclick="newOption()" class="btn btn-sm btn-primary">New Option</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="odata" style="display: none">
        <div id="row{count}" class="remove-wrapper">
            <div class="input-group">
                <input type="text" class="form-control" name="option[{count}][value]" placeholder="Value">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <input type="radio" name="correct" value="{count}" required>
                    </div>
                </div>
            </div>
            <i class="fa fa-times remove" onclick="removeOption({count})"></i>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="" id="delete-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Question</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('delete')
                        <p>Are you sure, you want to delete this question?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <script>
        $('#type').on('change', function () {
            console.log($(this).val())
            if ($(this).val() == 'subjective') {
                $('#subjective-div').show()
                $('#objective-div').hide()
            } else {
                $('#objective-div').show()
                $('#subjective-div').hide()
            }
        })

        function newOption() {
            var id = $('#options').data('count')
            id++
            $('#options').data('count', id)
            var html = $('#odata').html().replace(/\{count}/g, id)
            $('#options').append(html)
        }

        function removeOption(id) {
            $("#row" + id).remove()
        }

        function deleteRow(e) {
            $('#delete-form').attr('action', $(e).data('link'))
        }

    </script>
@endpush

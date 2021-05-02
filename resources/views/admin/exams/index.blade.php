<?php
$title = 'Exams List';
$user_id = \Auth::id();
?>
@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header row">
            <h3 class="col">Exams</h3>
            <div class="col-2 text-right">
                <a href="{{route('admin.exams.create')}}" class="btn btn-sm btn-success">New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="10">#</th>
                        <th>Title</th>
                        <th>Topic</th>
                        <th>Subject</th>
                        <th>Type</th>
                        <th width="150"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($records) && count($records))
                        @php($sr=1)
                        @foreach($records as $row)
                            <tr>
                                <td>{{$sr++}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->topic}}</td>
                                <td>{{$row->subject_name}}</td>
                                <td>{{$row->type_name}}</td>
                                <td>
                                    <a rel="tooltip" class="btn btn-primary btn-sm btn-round btn-icon" title="view" href="{{route('admin.exams.show',$row->id)}}">
                                        <i class="now-ui-icons gestures_tap-01"></i>
                                    </a>
                                    @if ($row->isOwner($user_id))
                                        <a rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon" title="edit" href="{{route('admin.exams.edit',$row->id)}}" >
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </a>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" title="delete" data-toggle="modal" data-target="#deleteSubject"
                                            data-link="{{route('admin.exams.destroy',$row->id)}}" onclick="deleteRow(this)">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
    <div class="modal fade" id="deleteSubject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="" id="delete-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Exam</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('delete')
                        <p>Are you sure, you want to delete this exam?</p>
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
        function deleteRow(e) {
            $('#delete-form').attr('action', $(e).data('link'))
        }
    </script>
@endpush

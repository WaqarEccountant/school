<?php
$title = 'Subjects List';
$user_id = \Auth::id();
?>
@extends('teacher.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header row">
            <h3 class="col">Subjects</h3>
            <div class="col-2 text-right">
                <button type="button" data-toggle="modal" data-target="#addSubject" class="btn btn-sm btn-success">New</button>
            </div>
        </div>
        <div class="card-body">
            {{--            <h2>Subjects</h2>--}}
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="10">#</th>
                        <th>Name</th>
                        <th width="100"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($records) && count($records))
                        @php($sr=1)
                        @foreach($records as $row)
                            <tr>
                                <td>{{$sr++}}</td>
                                <td>{{$row->name}}</td>
                                <td>
                                    @if ($row->isOwner($user_id))
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon" data-toggle="modal" data-target="#editSubject"
                                            data-name="{{$row->name}}" data-link="{{route('teacher.subjects.update',$row->id)}}" onclick="editRow(this)">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" data-toggle="modal" data-target="#deleteSubject"
                                            data-link="{{route('teacher.subjects.destroy',$row->id)}}" onclick="deleteRow(this)">
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

    <!-- Add Modal -->
    <div class="modal fade" id="addSubject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="{{route('teacher.subjects.store')}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" value="{{ old('name') }}" placeholder="Name" required>
                            @if($errors->has('name'))
                                <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                            @endif
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

    <!-- Edit Modal -->
    <div class="modal fade" id="editSubject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="" id="edit-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="edit-name">Name</label>
                            <input id="edit-name" type="text" name="name" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" value="" placeholder="Name" required/>
                            @if($errors->has('name'))
                                <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteSubject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="" id="delete-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('delete')
                        <p>Are you sure, you want to delete this subject?</p>
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
        function editRow(e) {
            $('#edit-form').attr('action', $(e).data('link'))
            $('#edit-name').val($(e).data('name'))
        }

        function deleteRow(e) {
            $('#delete-form').attr('action', $(e).data('link'))
        }
    </script>
@endpush

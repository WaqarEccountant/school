<?php
$title = 'Users List';
?>
@extends('admin.layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Invalid data provided.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-header row">
            <h3 class="col">Users</h3>
            <div class="col-2 text-right">
                <button type="button" data-toggle="modal" data-target="#addModel" class="btn btn-sm btn-success">New</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="10">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Role</th>
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
                                <td>{{$row->email}}</td>
                                <td>{{$row->mobile}}</td>
                                <td>{{$row->role_display}}</td>
                                <td>
                                    <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon" data-toggle="modal" data-target="#editModal"
                                        data-obj="{{$row}}" data-link="{{route('admin.users.update',$row->id)}}" onclick="editRow(this)">
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" data-toggle="modal" data-target="#deleteModal"
                                        data-link="{{route('admin.users.destroy',$row->id)}}" onclick="deleteRow(this)">
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
    <div class="modal fade" id="addModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="{{route('admin.users.store')}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
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
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control {{ $errors->has('email') ? "is-invalid" : "" }}" value="{{ old('email') }}" placeholder="Email">
                            @if($errors->has('email'))
                                <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input id="mobile" type="text" name="mobile" class="form-control {{ $errors->has('mobile') ? "is-invalid" : "" }}" value="{{ old('mobile') }}" placeholder="Mobile">
                            @if($errors->has('mobile'))
                                <strong class="invalid-feedback">{{ $errors->first('mobile') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select id="role" name="role" class="form-control {{ $errors->has('role') ? "is-invalid" : "" }}" required>
                                <option value="user">Student</option>
                                <option value="teacher">Teacher</option>
                                <option value="admin">Admin</option>
                            </select>
                            @if($errors->has('role'))
                                <strong class="invalid-feedback">{{ $errors->first('role') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" class="form-control {{ $errors->has('password') ? "is-invalid" : "" }}" value="{{ old('password') }}" placeholder="Password">
                            @if($errors->has('password'))
                                <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
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
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="" id="edit-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
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

                        <div class="form-group">
                            <label for="edit-email">Email</label>
                            <input id="edit-email" type="email" name="email" class="form-control {{ $errors->has('email') ? "is-invalid" : "" }}" value="{{ old('email') }}" placeholder="Email">
                            @if($errors->has('email'))
                                <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="edit-mobile">Mobile</label>
                            <input id="edit-mobile" type="text" name="mobile" class="form-control {{ $errors->has('mobile') ? "is-invalid" : "" }}" value="{{ old('mobile') }}" placeholder="Mobile">
                            @if($errors->has('mobile'))
                                <strong class="invalid-feedback">{{ $errors->first('mobile') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="edit-role">Role</label>
                            <select id="edit-role" name="role" class="form-control {{ $errors->has('role') ? "is-invalid" : "" }}" required>
                                <option value="user">Student</option>
                                <option value="teacher">Teacher</option>
                                <option value="admin">Admin</option>
                            </select>
                            @if($errors->has('role'))
                                <strong class="invalid-feedback">{{ $errors->first('role') }}</strong>
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
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="" id="delete-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete user</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('delete')
                        <p>Are you sure, you want to delete this user?</p>
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
            var obj = $(e).data('obj')
            $('#edit-name').val(obj.name)
            $('#edit-email').val(obj.email)
            $('#edit-mobile').val(obj.mobile)
            $('#edit-role').val(obj.role)
            // $('#edit-role').val(obj.role)
        }

        function deleteRow(e) {
            $('#delete-form').attr('action', $(e).data('link'))
        }
    </script>
@endpush

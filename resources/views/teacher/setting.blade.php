<?php
$title = 'Setting';
$user_id = \Auth::id();
?>
@extends('teacher.layouts.app')

@section('content')
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header row">
                <h3 class="col">Change Password</h3>
            </div>
            <div class="card-body">

                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="old_password">Current Password</label>
                        <input id="old_password" type="password" name="old_password" class="form-control {{ $errors->has('old_password') ? "is-invalid" : "" }}" placeholder="Current Password" autofocus required/>
                        @if($errors->has('old_password'))
                            <strong class="invalid-feedback">{{ $errors->first('old_password') }}</strong>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" name="password" class="form-control {{ $errors->has('password') ? "is-invalid" : "" }}"  placeholder="New Password" required/>
                        @if($errors->has('password'))
                            <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input id="confirm-password" type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? "is-invalid" : "" }}" placeholder="Confirm Password" required/>
                        @if($errors->has('password_confirmation'))
                            <strong class="invalid-feedback">{{ $errors->first('password_confirmation') }}</strong>
                        @endif
                    </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-success">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('user.profile.update', ['user' => $user->id]) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                          <label for="title">First Name</label>
                          <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $user->first_name }}" required>
                        </div>
                        <div class="form-group">
                          <label for="title">Last Name</label>
                          <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $user->last_name }}" required>
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group">
                          <label for="password_confirmation">Confirm Password</label>
                          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">Editting User: {{ $user->name }}</h4>
                    <form action="{{ route('admin.user.update', ['user' => $user->id]) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                          <label for="title">Name</label>
                          <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" required>
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
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="admin" id="admin" value="1" {{ $user->is_admin ? 'checked' : '' }}>
                            Admin
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Edit User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
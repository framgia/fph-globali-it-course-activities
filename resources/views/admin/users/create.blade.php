@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">Create a new User</h4>
                    <form action="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Name</label>
                          <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <div class="form-group">
                          <label for="password_confirm">Confirm Password</label>
                          <input type="password" class="form-control" name="password_confirm" id="password_confirm" required>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="admin" id="admin" value="1">
                            Admin
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Create Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
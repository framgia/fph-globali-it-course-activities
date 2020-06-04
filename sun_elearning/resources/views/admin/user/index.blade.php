@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard | Users</h1>
        <p>
          <a href="{{ route('admin.categories') }}" class="mr-4">Categories</a>
          <a href="{{ route('admin.users') }}">Users</a>
        </p>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <a class="btn btn-success my-2 float-right" href="{{ route('admin.user.create') }}" role="button">New User</a>
          </div>
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <th scope="row">{{ $user->id }}</th>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</td>
                          <td>
                            <div class="d-inline-flex">
                              <a class="btn btn-warning mr-2" href="{{ route('admin.user.edit', ['user' => $user->id]) }}" role="button">Edit</a>
                              <form action="{{ route('admin.user.destroy', ['user' => $user->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
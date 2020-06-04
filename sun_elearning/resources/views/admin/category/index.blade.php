@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard | Categories</h1>
        <p>
          <a href="{{ route('admin.categories') }}" class="mr-4">Categories</a>
          <a href="{{ route('admin.users') }}">Users</a>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-success my-2 float-right" href="{{ route('admin.category.create') }}" role="button">New Category</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        <tr>
                          <th scope="row">{{ $category->id }}</th>
                          <td><a href="{{ route('admin.category.show', ['category' => $category->id]) }}">{{ $category->title }}</a></td>
                          <td>{{ $category->description }}</td>
                          <td>
                            <div class="d-inline-flex">
                              <a class="btn btn-warning mr-2" href="{{ route('admin.category.edit', ['category' => $category->id]) }}" role="button">Edit</a>
                              <form action="{{ route('admin.category.destroy', ['category' => $category->id]) }}" method="POST">
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
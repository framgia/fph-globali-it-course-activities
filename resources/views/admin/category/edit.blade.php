@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">Editing Category: {{ $category->title }}</h4>
                    <form action="{{ route('admin.category.update', ['category' => $category->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title" id="title" value="{{ $category->title }}" required>
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" name="description" id="description" rows="5" style="resize: none;" required>{{ $category->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
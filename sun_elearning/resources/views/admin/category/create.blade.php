@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">Create a Category</h4>
                    <form action="{{ route('admin.category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" name="description" id="description" rows="5" style="resize: none;" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Create Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
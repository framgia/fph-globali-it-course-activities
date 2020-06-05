@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                          <textarea class="form-control" name="text" rows="3" style="resize: none;" required>{{ $post->text }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
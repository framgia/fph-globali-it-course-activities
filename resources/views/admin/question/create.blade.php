@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Add a Question</h4>
                        <form action="{{ route('admin.question.store', ['category' => $category->id]) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="text">Text</label>
                                <input type="text" class="form-control" name="text" id="text">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Create Question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
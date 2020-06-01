@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Add a Question</h4>
                        <form action="{{ route('admin.question.store', ['category' => $category->id]) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text">Question Text</label>
                                        <input type="text" class="form-control" name="text" id="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @for ($i = 1; $i < 5; $i++)
                                        <div class="form-group">
                                            <label>Choice {{ $i }}</label>
                                            <input type="text" class="form-control" name="choice{{ $i }}">
                                             <div class="form-radio">
                                            <label class="form-radio-label" style="cursor: pointer">
                                                <input type="radio" class="form-radio-input" name="correct_answer" value="{{ $i }}" required>
                                                Correct Answer
                                            </label>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right">Create Question</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Editting Question: {{ $question->text }}</h4>
                        <form action="{{ route('admin.question.update', ['category' => $category->id, 'question' => $question->id]) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text">Question Text</label>
                                        <input type="text" class="form-control" name="text" id="text" value="{{ $question->text }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @foreach ($question->choices as $i => $choice)
                                    <div class="form-group">
                                        <label>Choice {{ $i+1 }}</label>
                                        <input type="text" class="form-control" name="choice{{ $i+1 }}" value="{{ $choice->text }}">
                                        <input type="hidden" name="choice_id{{ $i+1 }}" value="{{ $choice->id }}">
                                         <div class="form-radio">
                                        <label class="form-radio-label" style="cursor: pointer">
                                            <input type="radio" class="form-radio-input" name="correct_answer" value="{{ $i+1 }}" required {{ $choice->is_correct ? 'checked' : '' }}>
                                            Correct Answer
                                        </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
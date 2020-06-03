@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-4">
                <h3>{{ $lesson->category->title }} <span class="float-right">{{ $questions->currentPage() }} of {{ $questions->lastPage() }}</span></h3>
                <div class="card">
                    <div class="card-body">
                        @foreach ($questions as $question)
                            <h1 class="card-title text-center">{{ $question->text }}</h1>
                            @foreach ($question->choices as $choice)
                                <form action="{{ route('lesson.answer', ['lesson' => $lesson->id, 'choice' => $choice->id]) }}" method="POST">
                                    @csrf
                                    @if ($questions->currentPage() == $questions->lastPage())
                                        <input type="hidden" name="next_page_url" value="{{ route('lesson.results', ['lesson' => $lesson->id]) }}">
                                    @else
                                        <input type="hidden" name="next_page_url" value="{{ $questions->nextPageUrl() }}">
                                    @endif
                                    <button type="submit" class="btn btn-primary btn-block my-3">{{ $choice->text }}</button>
                                </form>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
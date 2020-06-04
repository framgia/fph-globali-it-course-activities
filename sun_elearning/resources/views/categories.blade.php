@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categories</h1>
        <div class="row mt-5">
            @foreach ($categories as $category)
                @if ($category->questions->count() > 0)  
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-body">
                                <h4 class="card-title">{{ $category->title }}</h4>
                                <p class="card-text">{{ $category->description }}</p>
                                <form action="{{ route('lesson.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                                    <button type="submit" class="btn btn-primary float-right">Take Quiz</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
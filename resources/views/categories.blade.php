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
                                <a class="btn btn-primary float-right" href="#" role="button">Take Quiz</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
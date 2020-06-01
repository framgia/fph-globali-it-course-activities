@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $category->title }}</h4>
                        <p class="card-text">{{ $category->description }}</p>
                    </div>
                </div>
                <a class="btn btn-primary my-4 float-right" href="{{ route('admin.question.create', ['category' => $category->id]) }}" role="button">Add a Question</a>
                <table class="table mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Question</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category->questions as $question)
                            <tr>
                                <td scope="row">{{ $question->id }}</td>
                                <td>{{ $question->text }}</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a class="btn btn-warning mr-2" href="{{ route('admin.question.edit', ['category' => $category->id, 'question' => $question->id]) }}" role="button">Edit</a>
                                        <form action="{{ route('admin.question.destroy', ['category' => $category->id, 'question' => $question->id]) }}" method="POST">
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
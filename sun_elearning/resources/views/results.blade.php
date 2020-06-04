@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $lesson->category->title }}</h4>
                        <p class="card-text">{{ $lesson->category->description }}</p>

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Status</th>
                                    <th>Question</th>
                                    <th>Your Answer</th>
                                    <th>Correct Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lesson->answers as $answer)
                                    <tr>
                                        <td scope="row" class="{{ $answer->choice->is_correct ? 'text-success' : 'text-danger' }}">{{ $answer->choice->is_correct ? 'Correct' : 'Wrong' }}</td>
                                        <td>{{ $answer->question()->text }}</td>
                                        <td>{{ $answer->choice->text }}</td>
                                        <td>{{ $answer->question()->correctAnswer()->text }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
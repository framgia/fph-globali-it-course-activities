@extends('master')

@section('content')
<div>
    <div class="text-center">
        <h2> List of all the Suggestions </h2>
        <a href="{{ route('suggestions.create') }}">Add a suggestion</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Content</th>
                    <th class="text-center">Vote</th>
                    <th class="text-center">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suggestions as $suggestion)
                <tr>
                    <td class="text-center">{{ $suggestion->id }}</td>
                    <td class="text-center">{{ $suggestion->author }}</td>
                    <td class="text-center">{{ $suggestion->content }}</td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <span class="my-auto mx-2">{{ $suggestion->votes()->count() }}</span>
                            <a href="{{ route('suggestions.upvote', ['id' => $suggestion->id]) }}" class="btn btn-light">Upvote</a>
                            <a href="" class="btn btn-dark">Downvote</a>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="{{ route('suggestions.edit', ['id' => $suggestion->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('suggestions.delete', ['id' => $suggestion->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 
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
                        <a href="{{ route('suggestions.edit', ['id' => $suggestion->id]) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 
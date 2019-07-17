@extends('master')

@section('content')
<div>
    <div class="text-center">
        <h2> List of all the Books </h2>
        <a href="{{ route('create') }}"> Add a Book </a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td class="text-center"><a href="{{ route('show', ['id' => $book->id]) }}">{{ $book->id }}</a></td>
                    <td class="text-center">{{ $book->title }}</td>
                    <td class="text-center">{{ $book->description }}</td>
                    <td class="text-center">
                        <a class="btn btn-warning" href="{{ route('edit', ['id' => $book->id]) }}">Edit</a>
                        <form class="d-inline" action="{{ route('destroy', ['id' => $book->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>    
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
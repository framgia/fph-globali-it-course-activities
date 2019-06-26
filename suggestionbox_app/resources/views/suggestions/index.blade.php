@extends('master')

@section('content')
<div>
    <div class="text-center">
        <h2> List of all the Suggestions </h2>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suggestions as $suggestion)
                <tr>
                    <td class="text-center">{{ $suggestion->id }}</td>
                    <td class="text-center">{{ $suggestion->author }}</td>
                    <td class="text-center">{{ $suggestion->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 
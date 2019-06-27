@extends('master')

@section('content')
<div>
    <h2> Editting Suggestion #{{ $suggestion->id }}</h2>
    <form action="{{ route('suggestions.update', ['id' => $suggestion->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <label>Content: </label>
            <input name="content" value="{{ $suggestion->content }}"/>
        </div>
        <div>
            <label>Author: </label>
            <input name="author" value="{{ $suggestion->author }}"/>
        </div>
        <div>
            <button class="btn btn-success" type="submit"> Save </button>
            <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection 

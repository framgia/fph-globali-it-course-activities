@extends('master')

 @section('content')
<div>
    <h2> Editing Book # {{ $book->id }} </h2>
    
    <form action="{{ route('update', ['id' => $book->id]) }}" method="POST">
        @csrf
        @method('PUT')
     <div>
        <label>Title: </label>
        <input value="{{ $book->title }}" name="title"/>
    </div>
    <div>
        <label>Description: </label>
        <input value="{{ $book->description }}" name="description"/>
    </div>
    <div>
        <button class="btn btn-primary"> Submit </button>
        <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
    </div>
    </form>
</div>
@endsection 
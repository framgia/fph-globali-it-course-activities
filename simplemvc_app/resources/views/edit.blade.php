@extends('master')

 @section('content')
<div>
    <h2> Editing Book # {{ $book->id }} </h2>
    
    <form action="{{ route('update', ['id' => $book->id]) }}" method="POST">
        @csrf
     <div>
        <label>Title: </label>
        <input value="{{ $book->title }}" name="title"/>
    </div>
    <div>
        <label>Description: </label>
        <input value="{{ $book->description }}" name="description"/>
    </div>
    <div>
        <button> Submit </button>
    </div>
    </form>
</div>
@endsection 
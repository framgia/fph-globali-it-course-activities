@extends('master')

 @section('content')
<div>
    <h2> Editing Book # {{ $book->id }} </h2>

     <div>
        <label>Title: </label>
        <input value="{{ $book->title }}" />
    </div>
    <div>
        <label>Description: </label>
        <input value="{{ $book->description }}"/>
    </div>
    <div>
        <button> Submit </button>
    </div>
</div>
@endsection 
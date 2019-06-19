@extends('master')

@section('content')
<div>
  <h2> Book # {{ $book->id }}: {{ $book->title }} </h2>
  <p>{{ $book->description }}</p>
</div>
@endsection 
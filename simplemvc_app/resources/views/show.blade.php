@extends('master')

@section('content')
<div>
  <h2> Book # {{ $book->id }}: {{ $book->title }} </h2>
  <p>{{ $book->description }}</p>

  <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
</div>
@endsection 
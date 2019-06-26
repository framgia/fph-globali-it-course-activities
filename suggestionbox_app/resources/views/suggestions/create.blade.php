@extends('master')

@section('content')
<div>
    <h2> Add a Suggestion </h2>
    <form action="{{ route('suggestions.store') }}" method="POST">
        @csrf
        <div>
            <label>Content: </label>
            <input name="content"/>
        </div>
        <div>
            <label>Author: </label>
            <input name="author"/>
        </div>
        <div>
            <button class="btn btn-success" type="submit"> Add </button>
            <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection 

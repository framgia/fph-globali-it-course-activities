@extends('master')

@section('content')
<div>
    <h2> Create a Book</h2>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div>
            <label>Title: </label>
            <input name="title"/>
        </div>
        <div>
            <label>Description: </label>
            <input name="description"/>
        </div>
        <div>
            <button class="btn btn-primary" type="submit"> Create </button>
            <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection
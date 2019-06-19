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
            <button type="submit"> Create </button>
        </div>
    </form>
</div>
@endsection
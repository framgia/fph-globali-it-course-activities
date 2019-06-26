@extends('master')

@section('content')
<div>
    <h2> Add a Suggestion </h2>
    <form>
        <div>
            <label>Content: </label>
            <input name="content"/>
        </div>
        <div>
            <label>Author: </label>
            <input name="author"/>
        </div>
        <div>
            <button type="submit"> Add </button>
        </div>
    </form>
</div>
@endsection 

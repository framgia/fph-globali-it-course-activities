@extends('master')

@section('content')
<div>
    <div class="text-center">
        <h2> List of all the Suggestions </h2>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Anonymous</td>
                    <td class="text-center">Sample Suggestion</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection 
@extends('master')

 @section('content')
<div>
    <div class="text-center">
        <h2> List of all the Books </h2>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Book title</td>
                    <td class="text-center">Book description</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
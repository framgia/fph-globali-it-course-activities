@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h1>People that <a href="{{ route('user.show', ['user' => $user->id]) }}">{{ $user->first_name }} {{ $user->last_name }}</a> is following.</h1>
            @foreach ($user->followedUsers as $following)
                <div class="card my-4">
                    <div class="d-inline-flex align-items-center">
                        <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="100" alt="User Image">
                        <h4 class="ml-2 my-0 mr-auto">
                            <a href="{{ route('user.show', ['user' => $following->id]) }}">
                                {{ $following->first_name }} {{ $following->last_name }}
                            </a>
                        </h4>
                        @if (auth()->user()->id != $following->id)
                            @if (auth()->user()->isFollowing($following->id))
                                <form action="{{ route('user.unfollow', ['user' => $following->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-auto mr-4">Unfollow</button>
                                </form>
                            @else
                                <form action="{{ route('user.follow', ['user' => $following->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary ml-auto mr-4">Follow</button>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h1>People who are following <a href="{{ route('user.profile', ['user' => $user->id]) }}">{{ $user->name }}</a>.</h1>
            @foreach ($user->followers as $follower)
                <div class="card my-4">
                    <div class="d-inline-flex align-items-center">
                        <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="100" alt="User Image">
                        <h4 class="ml-2 my-0 mr-auto">
                            <a href="{{ route('user.profile', ['user' => $follower->id]) }}">
                                {{ $follower->name }}
                            </a>
                        </h4>
                        @if (auth()->user()->id != $follower->id)
                            @if (auth()->user()->isFollowing($follower->id))
                                <form action="{{ route('user.unfollow', ['user' => $follower->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-auto mr-4">Unfollow</button>
                                </form>
                            @else
                                <form action="{{ route('user.follow', ['user' => $follower->id]) }}" method="POST">
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
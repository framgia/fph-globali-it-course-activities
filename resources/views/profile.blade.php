@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <img class="card-img-top" src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $user->name }}</h4>
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-6">
                                <a href="{{ route('user.followers', ['user' => $user->id]) }}"><p>{{ $user->followers()->count() }} <br>Followers</p></a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('user.following', ['user' => $user->id]) }}"><p>{{ $user->followedUsers()->count() }} <br>Following</p></a>
                            </div>
                        </div>

                        @if ($user == auth()->user())
                            <a class="btn btn-primary btn-lg btn-block" href="{{ route('user.profile.edit', ['user' => auth()->user()->id]) }}">Edit Profile</a>
                        @else
                            @if (auth()->user()->isFollowing($user->id))
                                <form action="{{ route('user.unfollow', ['user' => $user->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-lg btn-block">Unfollow</button>
                                </form>
                            @else
                                <form action="{{ route('user.follow', ['user' => $user->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Follow</button>
                                </form>
                            @endif
                        @endif
                        <p class="card-text mt-4 text-center">Learned 20 words</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Activities</h4>
                        <hr>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
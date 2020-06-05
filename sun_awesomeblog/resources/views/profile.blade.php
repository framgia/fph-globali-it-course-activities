@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <img class="card-img-top" src="https://st3.depositphotos.com/4111759/13425/v/450/depositphotos_134255532-stock-illustration-profile-placeholder-male-default-profile.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h4>
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-6">
                                <p><a href="{{ route('user.followers', ['user' => $user->id]) }}">{{ $user->followers->count() }} <br>Followers</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a href="{{ route('user.following', ['user' => $user->id]) }}">{{ $user->followedUsers->count() }} <br>Following</a></p>
                            </div>
                        </div>

                        @if ($user->id == auth()->user()->id)
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
                @if (auth()->user()->isFollowing($user->id) || auth()->user()->id == $user->id)
                    @foreach ($user->posts as $post)
                        <div class="card mb-4">
                            @if ($user->id == auth()->user()->id)
                                <div class="card-header">
                                    <div class="float-right d-inline-flex">
                                        <a class="btn btn-warning btn-sm" href="{{ route('post.edit', ['post' => $post->id]) }}" role="button">Edit</a>
                                        <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm ml-2">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <h3 class="text-primary">{{ $post->user->first_name }} {{ $post->user->last_name }}</h3>
                                    <p class="mb-0">{{ $post->text }}</p>
                                    <footer class="blockquote-footer">{{ $post->created_at->diffForHumans() }}</footer>
                                </blockquote>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="card-title text-center">You are not following this user.</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection 
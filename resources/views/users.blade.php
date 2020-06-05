@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>All Users</h1>
                
                @foreach ($users as $user)
                    @if ($user != auth()->user())
                        <div class="card my-4">
                            <div class="d-inline-flex align-items-center">
                                <img src="https://st3.depositphotos.com/4111759/13425/v/450/depositphotos_134255532-stock-illustration-profile-placeholder-male-default-profile.jpg" width="100" alt="User Image">
                                <h4 class="ml-2 m-0 mr-auto">
                                    <a href="{{ route('user.show', ['user' => $user->id]) }}">{{ $user->first_name }}  {{ $user->last_name }}</a>
                                </h4>
                                @if (auth()->user()->isFollowing($user->id))
                                    <form action="{{ route('user.unfollow', ['user' => $user->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger float-right mr-4">Unfollow</button>
                                    </form>
                                @else
                                    <form action="{{ route('user.follow', ['user' => $user->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary float-right mr-4">Follow</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
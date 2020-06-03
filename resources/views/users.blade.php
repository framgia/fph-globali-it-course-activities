@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            @foreach ($users as $user)
                @if ($user != auth()->user())
                    <div class="card my-4">
                        <div class="d-inline-flex align-items-center">
                            <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="100" alt="User Image">
                            <h4 class="ml-2 my-0 mr-auto">{{ $user->name }}</h4>
                            @if (auth()->user()->isFollowing($user->id))
                                <form action="{{ route('user.unfollow', ['user' => $user->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-auto mr-4">Unfollow</button>
                                </form>
                            @else
                                <form action="{{ route('user.follow', ['user' => $user->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary ml-auto mr-4">Follow</button>
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
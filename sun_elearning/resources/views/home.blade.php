@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="mb-4">
                Dashboard
            </h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="100%" alt="User Image">
                </div>
                <div class="col-md-8">
                    <h4>
                        {{ Auth::user()->name }}
                    </h4>
                    <span class="text-primary">Learned {{ Auth::user()->learnedWords() }} Words</span>
                    <br>
                    <span class="text-primary">Learned {{ Auth::user()->lessons()->count() }} Lessons</span>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Activities</h1>
                    <hr>
                    @foreach ($activities->sortByDesc('created_at')->take(10) as $activity)
                        <div class="media my-3">
                            <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="50" alt="">
                            <div class="media-body ml-2">
                                <h5>
                                    @if ($activity->user_id == auth()->user()->id)
                                        You
                                    @else
                                        <a href="{{ route('user.profile', ['user' => $activity->user->id])}}">{{ $activity->user->name }}</a>
                                    @endif
                                    @if ($activity->notifiable_type == "App\Relationship")
                                        followed 
                                        <a href="{{ route('user.profile', ['user' => $activity->notifiable->followed->id]) }}">
                                            {{ $activity->notifiable->followed->name }}
                                        </a>
                                    @else
                                        took {{ $activity->notifiable->category->title }}
                                    @endif
                                </h5>
                                {{ $activity->created_at->diffForHumans() }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

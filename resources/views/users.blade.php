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
                                <h4 class="ml-2 m-0">{{ $user->first_name }}  {{ $user->last_name }}</h4>
                                <a name="" id="" class="btn btn-primary ml-auto mr-4" href="#" role="button">Follow</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
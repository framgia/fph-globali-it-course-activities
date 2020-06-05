@extends('layouts.app')

@section('css')
    <style>
        #homepage-image {
            background: url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 50vh;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div id="homepage-image">
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="my-5">Awesome Blog App</h1>
            </div>
            <div class="col-md-6 mx-auto">
                <p class="text-justify font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
@endsection
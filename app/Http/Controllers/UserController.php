<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function show(User $user)
    {
        return view('profile', compact('user'));
    }

    public function follow(User $user)
    {
        auth()->user()->followedUsers()->attach($user);

        return redirect()->back();
    }

    public function unfollow(User $user)
    {
        auth()->user()->followedUsers()->detach($user);

        return redirect()->back();
    }

    public function followers(User $user)
    {
        return view('followers', compact('user'));
    }

    public function following(User $user)
    {
        return view('following', compact('user'));
    }
}

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

    public function editProfile(User $user)
    {
        if (auth()->user() != $user) {
            return redirect()->back();
        }

        return view('editprofile', compact('user'));
    }

    public function updateProfile(User $user, Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'sometimes|confirmed'
        ]);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email
        ]); 

        if ($request->password) {
            $user->update(['password' => bcrypt($request->password)]);
        }

        return redirect()->route('user.show', ['user' => $user->id]);
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

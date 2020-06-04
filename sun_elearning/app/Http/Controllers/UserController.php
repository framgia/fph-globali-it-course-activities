<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all();
        
        return view('users', compact('users'));
    }

    public function profile(User $user)
    {
        return view('profile', compact('user'));
    }

    public function editProfile(User $user)
    {
        if (auth()->user() != $user) {
            return redirect()->back();
        }

        return view('edit', compact('user'));
    }

    public function updateProfile(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'sometimes|confirmed'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]); 

        if ($request->password) {
            $user->update(['password' => bcrypt($request->password)]);
        }

        return redirect()->route('user.profile', ['user' => $user->id]);
    }

    public function followers(User $user)
    {
        return view('followers', compact('user'));
    }

    public function following(User $user)
    {
        return view('following', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'sometimes|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => $request->admin == "1" ? 1 : 0
        ]);
        
        return redirect()->route('admin.users');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'sometimes|confirmed'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $request->is_admin ? 1 : 0
        ]); 

        if ($request->password) {
            $user->update(['password' => bcrypt($request->password)]);
        }

        return redirect()->route('admin.users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users');
    }
}

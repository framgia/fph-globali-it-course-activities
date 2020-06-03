<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->followedUsers()->attach($user);
        
        return redirect()->back();
    }

    public function destroy(User $user)
    {
        auth()->user()->followedUsers()->detach($user);
        
        return redirect()->back();
    }
}

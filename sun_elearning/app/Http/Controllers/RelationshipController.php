<?php

namespace App\Http\Controllers;

use App\User;
use App\Relationship;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->followedUsers()->attach($user);

        $relationship = Relationship::where('follower_id', auth()->user()->id)->where('followed_id', $user->id)->first();

        $relationship->activity()->create([
            'user_id' => auth()->user()->id
        ]);
        
        return redirect()->back();
    }

    public function destroy(User $user)
    {
        $relationship = Relationship::where('follower_id', auth()->user()->id)->where('followed_id', $user->id)->first();
        $relationship->activity()->delete();
        
        auth()->user()->followedUsers()->detach($user);

        
        return redirect()->back();
    }
}

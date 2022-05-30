<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FriendStoreController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(User $user, Request $request)
    {


        if ($request->user()->hasPendingFriendRequestFor($user)) {
            return back();
        }

        $request->user()->pendingFriendsTo()->attach($user);
        return back();
    }
}

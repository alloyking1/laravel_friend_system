<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileIndexController extends Controller
{
    //

    public function __invoke(User $user)
    {
        return view('friends/profile', [
            'user' => $user,
        ]);
    }
}

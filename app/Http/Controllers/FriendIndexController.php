<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class FriendIndexController extends Controller
{
    public function __constructor()
    {
        $this->middleware(['auth']);
    }

    public function __invoke()
    {
        return view('friends.index');
    }
}

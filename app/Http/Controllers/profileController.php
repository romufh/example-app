<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
        function profile()
  {
    $tweets = Tweet::query()
    ->where('user_id', Auth::id())
    ->orderByDesc('created_at')
    ->get();


    return view('profile',compact('tweets'));
  }
}

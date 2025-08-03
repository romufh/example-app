<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homePageController extends Controller
{
  //

  function index()
  {
    $tweets = Tweet::query() ->where('parent_tweet_id', null)->orderByDesc('created_at')->get();

    return view('index', compact('tweets'));
  }

}

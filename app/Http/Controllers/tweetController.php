<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTweetRequest;
use App\Models\Tweet;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class tweetController extends Controller
{
    //

    function view1(Tweet $tweet) {
        return view('tweet.view1', compact('tweet'));
    }
      function store(StoreTweetRequest $request)

  {
  $tweet= Auth::user()->tweets()->create($request->validated());
  if($tweet->parentTweet()->exists()){
$tweet->baseTweet()->associate($tweet->parentTweet->baseTweet->id)->save();
  }
  else{
  $tweet->baseTweet()->associate($tweet)->save();}
  return redirect()->back();
  }
}

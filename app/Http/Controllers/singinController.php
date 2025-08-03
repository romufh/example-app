<?php

namespace App\Http\Controllers;

use App\Http\Requests\SinginRequest;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class singinController extends Controller
{
    //

    function singIn()
  {
    return view('singin');
  }

      function store(SinginRequest $request)
  {
    $user=User::create( $request->validated());
    $file=$request->file('avatar');
    $path=Storage::disk('public')->putFileAs('images',$file,$user-> id .'.'.$file->getClientOriginalExtension());
    $user->avatar=$path;
    $user->save();
    Auth::login($user,true);
    return redirect()->route("home");
  }
}




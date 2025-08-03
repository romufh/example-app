<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogInRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //

    function logIn()
  {
    return view('Login');
  }
    function store(LogInRequest $request)
  {
    if(Auth::attempt($request->validated(),true)){
      return redirect()->route('home');
    }
    return redirect()->back()->withInput($request->only('email'))->withErrors([
      'password'=>'البيانات المدخلة غير صحيحة'
    ]);
  }
}



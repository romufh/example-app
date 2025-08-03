<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogOutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logOutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LogOutRequest $request)
    {
      $request->validated();
        Auth::logout();
        return redirect()->route('home');
    }
}

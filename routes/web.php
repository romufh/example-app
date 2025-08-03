<?php

use App\Http\Controllers\homePageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logOutController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\singinController;
use App\Http\Controllers\testController;
use App\Http\Controllers\tweetController;
use Illuminate\Support\Facades\Route;
//hi

Route::get("/homePage",[homePageController::class,'index'])->name('home');
Route::get("/profile",[profileController::class,'profile'])->name('profile');

Route::get("/tweet/{tweet}",[tweetController::class,'view1'])->name('tweet');
Route::post("/tweet/create",[tweetController::class,'store'])->name('tweet.create');
Route::get("/login",[loginController::class,'login']);
Route::post("/login",[loginController::class,'store']);
Route::get("/singin",[singinController::class,'singin'])->name('singin');
Route::post("/singin",[singinController::class,'store']);
Route::post("/logout",logOutController::class)->name("logout");


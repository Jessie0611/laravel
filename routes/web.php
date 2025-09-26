<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});
Route::resource('posts', PostController::class);
//create route based off a resource (built in resource feature), creates routes for all the diff methods in PostController

Route::get('/contact', function () {
    return view('contact');
});

// POST Route
Route::post("/formsubmitted", function (Request $request) {
    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:10|max:30|email',
    ]);

    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your full name is {$fullname}, and your email is {$email}!";
})->name("formsubmitted");

use App\Http\Controllers\AccountController;

Route::get('/account', [AccountController::class, 'index'])->middleware('auth')->name('account');
Route::post('/logout', [AccountController::class, 'logout'])->name('logout');

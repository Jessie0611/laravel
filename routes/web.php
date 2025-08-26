<?php
/*Get rout example
Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

//Parameters using routes
Route::get('/portfolio/{firstName}/{lastName}', function ($firstName, $lastName) {
    return $firstName . " " . $lastName;
});

//named routes
Route::get('/test', function () {
    return "this is a test";
});

//grouped routes
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::prefix("portfolio")->group(function () {
    Route::get('/portfolio/company', function () {
        return view('company');
    });
Route::get('/portfolio/organization', function () {
        return view('organization');
    });
});
*/

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
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

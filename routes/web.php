<?php

use Illuminate\Support\Facades\Route;
// ^we want to grab a certain class call routes

//6 Different Types Of Routes: POST, GET, PUT, DELETE, patch, options

//Get rout example
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

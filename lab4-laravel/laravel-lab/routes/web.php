<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['course' => 'Web Information Technology']);
});

Route::get('/about', function () {
    return view('about');
});

// 1. 
// resources/views/

// 2.
// ./routes
// older versions had routes in /app/http/

// 3.
// it takes the name of file and add extensios the framework itself 
// like having home.blade.php
// if we use another view technology, laravel itself handle extensions 
// laravel also handle the root folder itself
// we dont need to specify its absolute path ourself

// 4.
// the url /about or http::/localhost:8000/about
// is the url we type in browser and browser send a get request to server 
// server then respond with the code that exist in about.blade.php 
// we already specify in routes to what php file should return to browser as respond


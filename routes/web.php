<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//when someone visits the page we show them the welcome page
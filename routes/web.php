<?php

use Illuminate\Support\Facades\Route;
// use Filament\Http\Middleware\Authenticate;
// use Filament\Facades\Filament;
Route::get('/', function () {
    return view('welcome');
});



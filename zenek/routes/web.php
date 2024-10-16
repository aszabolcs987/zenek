<?php

use App\Http\Controllers\kiiratascontroller;
use App\Http\Controllers\mentescontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// adatok mentese adatbazisba (POST = feltoltes)
Route::post('/', [mentescontroller::class, 'save']);

// adatok lekerese az adatbazisbol (GET = lekeres)
Route::get('/success', [kiiratascontroller::class, 'getContacts']);

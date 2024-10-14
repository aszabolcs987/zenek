<?php

use App\Http\Controllers\kiiratascontroller;
use App\Http\Controllers\mentescontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Adatok mentése az adatbázisba (POST = FELTÖLTÉS)
Route::post('/', [mentescontroller::class, 'save']);

// Az adatbázis adatainak lekérése a /success oldalra (GET = LEKÉRÉS)
Route::get('/success', [kiiratascontroller::class, 'getContacts']);
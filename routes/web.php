<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//
// Pruebas con TailwindCSS

Route::prefix('tailwindcss')->name('twcss.')->group(function () {
    Route::get('/', function () {
        return view('__tailwindcss.01-index');
    })->name('index');

    Route::get('/grid', function () {
        return view('__tailwindcss.02-grid');
    })->name('grid');

    Route::get('/personalizado', function () {
        return view('__tailwindcss.03-personalizado');
    })->name('personalizado');

    Route::get('/flexbox', function () {
        return view('__tailwindcss.04-flexbox');
    })->name('flexbox');

    Route::get('/navbar', function () {
        return view('__tailwindcss.05-navbar');
    })->name('navbar');

    Route::get('/navbarjs', function () {
        return view('__tailwindcss.05-navbarjs');
    })->name('navbarjs');
});

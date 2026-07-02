<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::resource('artists', ArtistController::class)->only(['index', 'create', 'store']);
Route::resource('albums', AlbumController::class)->only(['index', 'create', 'store']);

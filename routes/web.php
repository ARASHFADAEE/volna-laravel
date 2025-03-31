<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SongController;
use App\Http\Controllers\Frontend\AlbumController;
use App\Http\Controllers\Frontend\MoodController;
use App\Http\Controllers\Frontend\GenreController;
use App\Http\Controllers\Frontend\ArtistController;

// صفحه اصلی
Route::get('/', [HomeController::class, 'index'])->name('home');

// تک آهنگ‌ها
Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
Route::get('/songs/{slug}', [SongController::class, 'show'])->name('songs.show');

// آلبوم‌ها
Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/{slug}', [AlbumController::class, 'show'])->name('albums.show');

// مودها
Route::get('/moods', [MoodController::class, 'index'])->name('moods.index');
Route::get('/moods/{slug}', [MoodController::class, 'show'])->name('moods.show');

// ژانرها
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/genres/{slug}', [GenreController::class, 'show'])->name('genres.show');

// هنرمندان
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artists/{slug}', [ArtistController::class, 'show'])->name('artists.show');
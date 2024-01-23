<?php

use Illuminate\Support\Facades\Route;
use Iman\Streamer\Video;
use Iman\Streamer\VideoStreamer;
use Livewire\Volt\Volt;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('video/create', 'video/create')
    ->middleware(['auth'])
    ->name('video.create');

Volt::route('/videos/create', 'pages.videos.create')
    ->name('videos.create');

Volt::route('/videos/{id}/detail', 'pages.videos.show')
    ->name('videos.show');

Route::get('/videos-streaming/{video}', function ($video) {
    $path = public_path("$video");
    VideoStreamer::streamFile($path);
})->where('video', '.*')->name('stream.video');

require __DIR__ . '/auth.php';
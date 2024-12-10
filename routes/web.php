<?php

use App\Livewire\Excel\ImportProviders;
use App\Livewire\Posts\CreatePosts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/dashboard', ImportProviders::class)->name('dashboard');
});

<?php

use App\Http\Controllers\EmailCollectionController;
use Illuminate\Support\Facades\Route;

Route::get('/email', [EmailCollectionController::class, 'create'])
    ->name('email');

    Route::post('/email', [EmailCollectionController::class, 'store'])
        ->name('email.submit');
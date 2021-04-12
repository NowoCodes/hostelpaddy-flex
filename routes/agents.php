<?php

use Illuminate\Support\Facades\Route;

Route::get('/agent/view-students', function () {
    return view('agents.viewstudents');
})->name('viewstudents');

Route::get('/agent/view-hostels', function () {
    return view('agents.viewhostels');
})->name('viewhostels');
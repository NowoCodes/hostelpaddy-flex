<?php
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgentStudentController;
use App\Http\Controllers\AgentHostelController;
use Illuminate\Support\Facades\Route;

Route::middleware(['agent'])->group(function () {
    Route::resource('agent', AgentController::class);
    // Route::prefix('agent')->name('agent.')->group(function () {
    //     Route::resource('students', AgentStudentController::class)
    //         ->only(['index', 'show']);
        
    // });

    // Route::prefix('agent')->name('agent.')->group(function () {
    //     Route::resource('hostels', AgentHostelController::class);
        
    // });
    Route::resource('agentstudent', AgentStudentController::class);
    Route::resource('agenthostel', AgentHostelController::class);
});
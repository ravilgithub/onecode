<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Validation\RuleController;


Route::prefix('validation')->name('validation.')->group(function() {
    Route::get('/rules', [RuleController::class, 'index'])->name('rules.index');
    Route::get('/rules/create', [RuleController::class, 'create'])->name('rules.create');
    Route::post('/rules', [RuleController::class, 'store'])->name('rules.store');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Validation\Rules;

Route::prefix('validation')->name('validation.')->group(function() {
    Route::get('/rules', [Rules::class, 'index'])->name('rules.index');
    Route::get('/rules/create', [Rules::class, 'create'])->name('rules.create');
    Route::post('/rules', [Rules::class, 'store'])->name('rules.store');
});

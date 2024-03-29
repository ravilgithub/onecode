<?php

use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;

/**
 * Posts
 */
// Route::prefix('user')->name('user.')->middleware(['auth', 'active'])->group(function () {
Route::prefix('user')->name('user.')->group(function () {
    Route::resource('/posts', PostController::class);
    Route::redirect('/', 'user/posts')->name('user');

    /*Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');*/

    // Increase Likes of Post
    Route::put('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');
});

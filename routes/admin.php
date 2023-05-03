<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

/**
 * Posts
 */
Route::prefix('admin')->name('admin.')->middleware(['auth', 'active', 'admin'])->group(function () {
    Route::resource('/posts', PostController::class);
    Route::redirect('/', 'admin/posts')->name('admin');

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

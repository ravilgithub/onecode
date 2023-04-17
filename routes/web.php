<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogController;

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

Route::view('/', 'welcome', ['name' => 'Ravil'])->name('home');
Route::redirect('/home', '/', 301)->name('home.redirect');



/**
 * Test
 */
//Route::get('/tests', [TestController::class, 'index'])->name('tests.index');
//Route::post('/tests', [TestController::class, 'store'])->name('tests.store');

// Не указали метод контроллера - вызовет метод __invoke, если он определён.
//Route::get('/tests', TestController::class);



/**
 * Registration ( Контроллера пока нет )
 */
// Форма регистрация пользователя.
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

// Регистрация пользователя.
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');



/**
 * Login ( Контроллера пока нет )
 */
// Форма входа в личный кабинет.
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

// Вход в личный кабинет.
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Форма ввода кода отправленного на email для подтверждение входа. Двухфакторная аутентификация.
Route::get('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');

// Двухфакторная аутентификация.
Route::post('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');



/**
 * Posts
 */
// Post comment
Route::resource('/posts/{post}/comments', CommentController::class);



/**
 * Blog
 */
Route::resource('/blog', BlogController::class)->only(['index', 'show']);

// Increase Likes of Post
Route::put('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');



/**
 * Fallback
 */
// В самом низу, после всех маршрутов.
//Route::fallback(fn () => 'fallback');

<?php


use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogMiddleware;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Posts\CommentController;


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
 * throttle:tests - \App\Providers\RouteServiceProvider::configureRateLimiting()
 */
Route::middleware(['throttle:tests'])->group(function () {
    Route::get('/tests', [TestController::class, 'index'])->middleware('token:secret')->name('tests.index');
    //Route::post('/tests', [TestController::class, 'store'])->name('tests.store');

    // Не указали метод контроллера - вызовет метод __invoke, если он определён.
    //Route::get('/tests', TestController::class);
});


Route::middleware('guest')->group(function () {
    /**
     * Registration
     */
    // Форма регистрация пользователя.
    Route::get('/register', [RegisterController::class, 'index'])->name('register');

    // Регистрация пользователя.
    // Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware(LogMiddleware::class);
    // Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('log');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


    /**
     * Login
     */
    // Форма входа в личный кабинет.
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    // Вход в личный кабинет.
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');


    /**
     * Login Двухфакторная аутентификация.
     */
    // Форма ввода кода отправленного на email для подтверждение входа. Двухфакторная аутентификация.
    Route::get('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm')->withoutMiddleware('guest');

    // Двухфакторная аутентификация.
    Route::post('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm')->withoutMiddleware('guest');
});


/**
 * Login
 */
// Форма входа в личный кабинет.
//Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');

// Вход в личный кабинет.
//Route::post('/login', [LoginController::class, 'store'])->name('login.store')->middleware('guest');


/**
 * Login Двухфакторная аутентификация.
 */
// Форма ввода кода отправленного на email для подтверждение входа. Двухфакторная аутентификация.
//Route::get('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');

// Двухфакторная аутентификация.
//Route::post('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');


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
